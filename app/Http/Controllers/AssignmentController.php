<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserAssignment;
use App\Models\Submission;
use Carbon\Carbon;

class AssignmentController extends Controller
{
    public function userIndex(Request $request)
    {
        $classId = $request->query('class_id');
        $userId = auth()->id();

        $assignments = UserAssignment::when($classId, function ($query) use ($classId) {
            return $query->whereHas('assignment', function ($query) use ($classId) {
                $query->where('class_id', $classId);
            });
        })->where('user_id', $userId)->with('assignment')->get();

        return response()->json($assignments);
    }

    public function index()
    {
        $assignments = Assignment::with(['classRoom', 'submissions'])->get();
        return view('data-masters.assignments', compact('assignments'));
    }

    public function create()
    {
        $classes = ClassRoom::all();
        return view('data-masters.assignments-add', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'class_id' => 'required|exists:classes,id',
            'due_date' => 'required|date',
        ]);

        $assignment = Assignment::create($request->all());

        // Buat UserAssignment untuk setiap user di kelas
        $class = ClassRoom::find($request->class_id);
        foreach ($class->users as $user) {
            UserAssignment::create([
                'assignment_id' => $assignment->id,
                'user_id' => $user->id,
                'status' => 'assigned',
            ]);
        }

        Log::info('Assignment added: ' . $assignment);

        return redirect()->route('assignments.index')->with('success', 'Assignment added successfully.');
    }

    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $classes = ClassRoom::all();
        return view('data-masters.assignments-edit', compact('assignment', 'classes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'class_id' => 'required|exists:classes,id',
            'due_date' => 'required|date',
        ]);

        $assignment = Assignment::findOrFail($id);
        $assignment->update($request->all());

        Log::info('Assignment updated: ' . $assignment);

        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    }

    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        Log::info('Assignment deleted: ' . $assignment);

        return response()->json(['success' => 'Assignment deleted successfully.']);
    }

    public function submit(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:under review,approved',
        ]);

        $userAssignment = UserAssignment::where('assignment_id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
        $userAssignment->update(['status' => $request->status]);

        $submission = Submission::where('assignment_id', $id)
            ->where('student_id', auth()->id())
            ->firstOrFail();
        $submission->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Assignment status updated.');
    }

    public function taskView()
    {
        $user = auth()->user();
        $userAssignments = UserAssignment::where('user_id', $user->id)
            ->with(['assignment.classRoom.teacher', 'assignment.submissions'])
            ->get();

        foreach ($userAssignments as $userAssignment) {
            $userAssignment->assignment->due_date = Carbon::parse($userAssignment->assignment->due_date);
        }

        return view('task.task-list', compact('userAssignments'));
    }

    public function show($id)
    {
        $assignment = Assignment::with(['classRoom.teacher', 'submissions'])->findOrFail($id);

        // Convert due_date to Carbon instance if it's not already
        if (!($assignment->due_date instanceof Carbon)) {
            $assignment->due_date = Carbon::parse($assignment->due_date);
        }

        return view('task.task-details', compact('assignment'));
    }
}
