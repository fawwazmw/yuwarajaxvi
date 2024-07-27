<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Assignment;
use App\Models\User;
use App\Models\UserAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubmissionController extends Controller
{
    public function updateStatusAndGrade(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:assigned,under review,approved',
            'grade' => 'nullable|integer|min:0|max:100',
        ]);

        $submission = Submission::findOrFail($id);
        $submission->status = $request->input('status');
        $submission->grade = $request->input('grade');
        $submission->save();

        // Update total grade for the user
        if ($submission->status === 'approved' && !is_null($submission->grade)) {
            $user = User::findOrFail($submission->student_id);
            $user->total_grade = Submission::where('student_id', $user->id)
                ->where('status', 'approved')
                ->sum('grade');
            $user->save();
        }

        // Update the status in the user_assignments table
        UserAssignment::where('assignment_id', $submission->assignment_id)
            ->where('user_id', $submission->student_id)
            ->update(['status' => $submission->status]);

        return response()->json(['message' => 'Submission status and grade updated successfully']);
    }

    public function userIndex(Request $request)
    {
        $classId = $request->query('class_id');
        $assignments = Assignment::when($classId, function ($query) use ($classId) {
            return $query->where('class_id', $classId);
        })->get();

        return response()->json($assignments);
    }

    public function index()
    {
        $submissions = Submission::with(['assignment.classRoom', 'student'])->get();
        return view('data-masters.submissions', compact('submissions'));
    }

    public function create()
    {
        $assignments = Assignment::with('classRoom')->get();
        $students = User::all();
        return view('data-masters.submissions-add', compact('assignments', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'student_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        $submission = Submission::create([
            'assignment_id' => $request->assignment_id,
            'student_id' => $request->student_id,
            'content' => $request->content,
            'status' => 'under review',
        ]);

        // Update the status in the user_assignments table
        UserAssignment::where('assignment_id', $submission->assignment_id)
            ->where('user_id', $submission->student_id)
            ->update(['status' => 'under review']);

        return redirect()->route('submissions.index')->with('success', 'Submission created successfully.');
    }

    public function edit($id)
    {
        $submission = Submission::findOrFail($id);
        $assignments = Assignment::with('classRoom')->get();
        $students = User::all();
        return view('data-masters.submissions-edit', compact('submission', 'assignments', 'students'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:assigned,under review,approved',
            'grade' => 'nullable|integer|min:0|max:100',
        ]);

        $submission = Submission::findOrFail($id);
        $submission->status = $request->input('status');
        $submission->grade = $request->input('grade');
        $submission->save();

        // Update total grade for the user
        if ($submission->status === 'approved' && !is_null($submission->grade)) {
            $user = User::findOrFail($submission->student_id);
            $user->total_grade = Submission::where('student_id', $user->id)
                ->where('status', 'approved')
                ->sum('grade');
            $user->save();
        }

        // Update the status in the user_assignments table
        UserAssignment::where('assignment_id', $submission->assignment_id)
            ->where('user_id', $submission->student_id)
            ->update(['status' => $submission->status]);

        return redirect()->route('submissions.index')->with('success', 'Submission updated successfully.');
    }

    public function destroy($id)
    {
        $submission = Submission::findOrFail($id);
        $submission->delete();

        Log::info('Submission deleted: ' . $submission);

        return response()->json(['success' => 'Submission deleted successfully.']);
    }
}
