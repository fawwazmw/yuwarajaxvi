<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('data-masters.announcements', compact('announcements'));
    }

    public function create()
    {
        return view('data-masters.announcements-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Announcement::create($request->all());

        return redirect()->route('announcements.index')
            ->with('success', 'Announcement created successfully.');
    }

    public function show(Announcement $announcement)
    {
        return view('data-masters.show', compact('announcement'));
    }

    public function edit(Announcement $announcement)
    {
        return view('data-masters.announcements-edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $announcement->update($request->all());

        return redirect()->route('announcements.index')
            ->with('success', 'Announcement updated successfully.');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('announcements.index')
            ->with('success', 'Announcement deleted successfully.');
    }

    public function latest()
    {
        $latestAnnouncement = Announcement::latest()->first();
        return view('index', compact('latestAnnouncement'));
    }
}
