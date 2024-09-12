<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['assignment', 'user'])->get();
        return view('data-masters.comments', compact('comments'));
    }

    public function create()
    {
        $assignments = Assignment::all();
        $users = User::all();
        return view('data-masters.comments-add', compact('assignments', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'comment' => 'required|string|max:1000',
        ]);
    
        $comment = new Comment();
        $comment->assignment_id = $request->assignment_id;
        $comment->user_id = auth()->id(); // Assuming the user is authenticated
        $comment->comment = $request->comment;
        $comment->save();
    
        // Check if the request is coming from the task details page
        if ($request->has('return_to_task') && $request->return_to_task === 'true') {
            return redirect()->route('tasks.show', ['id' => $request->assignment_id])->with('success', 'Yay kamu berhasil nambah comment!');
        }
    
        return redirect()->route('comments.index')->with('success', 'Cie ada komentar baru nich');
    }


    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $assignments = Assignment::all();
        $users = User::all();
        return view('data-masters.comments-edit', compact('comment', 'assignments', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'user_id' => 'required|exists:users,id',
            'comment' => 'required|string',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        Log::info('Comment updated: ' . $comment);

        return redirect()->route('comments.index')->with('success', 'Wow, anda berhasil memperbarui komentar');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        Log::info('Comment deleted: ' . $comment);

        return redirect()->route('comments.index')->with('success', 'Yeay komentar berhasil dihapus!');
    }
}
