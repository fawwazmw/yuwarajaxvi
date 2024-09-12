<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\UserAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
        // Validasi input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'announcement_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
        ]);

        $data = $request->all();

        // Cek apakah ada file gambar yang diupload
        if ($request->hasFile('announcement_image')) {
            // Simpan gambar ke dalam folder storage
            $filePath = $request->file('announcement_image')->store('public/announcements');
            // Simpan path gambar ke dalam database
            $data['announcement_image'] = str_replace('public/', 'storage/', $filePath);
        }

        // Simpan pengumuman ke dalam database
        Announcement::create($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('announcements.index')->with('success', 'Asik ada pengumuman baru nich');
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
            ->with('success', 'Wah pengumuman berhasil diperbarui!');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('announcements.index')
            ->with('success', 'Wow pengumuman baru saja berhasil dihapus!');
    }

    public function latest()
    {
        $latestAnnouncement = Announcement::latest()->first();
       
        $userId = auth()->id();
        $totalAssignments = UserAssignment::where('user_id', $userId)->count();
        $approvedAssignments = UserAssignment::where('user_id', $userId)
            ->where('status', 'approved')
            ->count();
        $progressPercentage = $totalAssignments > 0 ? ($approvedAssignments / $totalAssignments) * 100 : 0;
        return view('index', compact('latestAnnouncement','progressPercentage'));
    }

    // app/Http/Controllers/AnnouncementController.php
    public function indexUser()
    {
        $announcements = Announcement::all(); // Atau sesuaikan dengan query yang diperlukan
        return view('announcement.announcement-detail', compact('announcements'));
    }

    public function list()
    {
        // Mengambil semua pengumuman dan mengurutkannya berdasarkan tanggal pembuatan dari terbaru ke terlama
        $announcements = Announcement::orderBy('created_at', 'desc')->get();

        // Kirim data pengumuman ke view announcement-list.blade.php
        return view('announcement.announcement-list', compact('announcements'));
    }

    public function showDetail($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcement.announcement-detail', compact('announcement'));
    }

    public function showInfoYuwaDetail($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('info-yuwa-detail', compact('announcement'));
    }
}
