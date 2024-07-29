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
    // Admin methods
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

        try {
            $submission = Submission::create([
                'assignment_id' => $request->assignment_id,
                'student_id' => $request->student_id,
                'content' => $request->content,
                'status' => 'under review',
            ]);

            UserAssignment::updateOrCreate(
                ['assignment_id' => $submission->assignment_id, 'user_id' => $submission->student_id],
                ['status' => 'under review']
            );

            Log::info("Submission created: Submission ID {$submission->id}");

            return redirect()->route('submissions.index')->with('success', 'Submission added successfully');
        } catch (\Exception $e) {
            Log::error("Error creating submission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add submission');
        }
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
            'content' => 'required|string',
        ]);

        try {
            $submission = Submission::findOrFail($id);
            $submission->status = $request->input('status');
            $submission->grade = $request->input('grade');
            $submission->content = $request->input('content');
            $submission->save();

            if ($submission->status === 'approved' && !is_null($submission->grade)) {
                $user = User::findOrFail($submission->student_id);
                $user->total_grade = Submission::where('student_id', $user->id)
                    ->where('status', 'approved')
                    ->sum('grade');
                $user->save();
            }

            UserAssignment::updateOrCreate(
                ['assignment_id' => $submission->assignment_id, 'user_id' => $submission->student_id],
                ['status' => $submission->status]
            );

            Log::info("Submission updated: Submission ID {$submission->id}");

            return redirect()->route('submissions.index')->with('success', 'Submission updated successfully');
        } catch (\Exception $e) {
            Log::error("Error updating submission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update submission');
        }
    }

    public function destroy($id)
    {
        try {
            $submission = Submission::findOrFail($id);
            $userAssignment = UserAssignment::where('assignment_id', $submission->assignment_id)
                ->where('user_id', $submission->student_id)
                ->first();

            $submission->delete();

            if ($userAssignment) {
                $userAssignment->update(['status' => 'assigned']);
            }

            return redirect()->route('submissions.index')->with('success', 'Submission deleted successfully');
        } catch (\Exception $e) {
            Log::error("Error deleting submission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete submission');
        }
    }

    // User methods
    public function storeUser(Request $request)
    {
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'content' => 'required|string',
        ]);

        try {
            $submission = Submission::create([
                'assignment_id' => $request->assignment_id,
                'student_id' => auth()->id(),
                'content' => $request->content,
                'status' => 'under review',
            ]);

            UserAssignment::updateOrCreate(
                ['assignment_id' => $submission->assignment_id, 'user_id' => $submission->student_id],
                ['status' => 'under review']
            );

            Log::info("User submission created: Submission ID {$submission->id}");

            return redirect()->route('user.submissions.index')->with('success', 'Submission added successfully');
        } catch (\Exception $e) {
            Log::error("Error creating user submission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to add submission');
        }
    }

    public function updateUser(Request $request, $id)
    {
        Log::info("Starting user update process for submission ID: $id");

        $request->validate([
            'content' => 'required|string',
        ]);

        try {
            $submission = Submission::findOrFail($id);
            Log::info("Submission found: ", $submission->toArray());

            $submission->content = $request->input('content');
            $submission->save();

            Log::info("Submission updated: ", $submission->toArray());

            return redirect()->route('user.submissions.index')->with('success', 'Submission updated successfully');
        } catch (\Exception $e) {
            Log::error("Error updating user submission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update submission');
        }
    }

    public function destroyUser($id)
    {
        try {
            $submission = Submission::findOrFail($id);
            $userAssignment = UserAssignment::where('assignment_id', $submission->assignment_id)
                ->where('user_id', $submission->student_id)
                ->first();

            $submission->delete();

            if ($userAssignment) {
                $userAssignment->update(['status' => 'assigned']);
            }

            return redirect()->route('user.submissions.index')->with('success', 'Submission deleted successfully');
        } catch (\Exception $e) {
            Log::error("Error deleting user submission: " . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete submission');
        }
    }
}
