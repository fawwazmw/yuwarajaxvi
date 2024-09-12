<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\UserAssignment;

class HomeAndIndex extends Controller
{

    private function getLatestAnnouncement()
    {
        return Announcement::latest()->first();
    }
    
            public function index()
        {
            $latestAnnouncement = $this->getLatestAnnouncement();
            $userId = auth()->id();
            $totalAssignments = UserAssignment::where('user_id', $userId)->count();
            $approvedAssignments = UserAssignment::where('user_id', $userId)
                ->where('status', 'approved')
                ->count();
        
            return view('index', compact('latestAnnouncement', 'totalAssignments', 'approvedAssignments'));
        }


    // public function index()
    // {
    //     $latestAnnouncement = $this->getLatestAnnouncement();
    //     $userId = auth()->id();
    //     $totalAssignments = UserAssignment::where('user_id', $userId)->count();
    //     $approvedAssignments = UserAssignment::where('user_id', $userId)
    //         ->where('status', 'approved')
    //         ->count();
    //     $progressPercentage = $totalAssignments > 0 ? ($approvedAssignments / $totalAssignments) * 100 : 0;

    //     return view('contoh1', compact('latestAnnouncement', 'progressPercentage'));
    // }

    public function infoYuwaList()
    {
        $announcements = Announcement::all();
        return view('info-yuwa-list', compact('announcements'));
    }

    public function infoYuwa()
    {
        $latestAnnouncements = Announcement::latest()->take(2)->get();
        return view('info-yuwa', compact('latestAnnouncements'));
    }

    // Method baru untuk menampilkan detail pengumuman berdasarkan ID
    public function infoYuwaDetail($id)
    {
        // Cari pengumuman berdasarkan ID
        $announcement = Announcement::findOrFail($id);

        // Kirim data pengumuman ke view info-yuwa-detail
        return view('info-yuwa-detail', compact('announcement'));
    }
}
