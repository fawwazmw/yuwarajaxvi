<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RankMahasiswaController extends Controller
{
    public function index()
    {
        $rankedUsers = User::with(['prodi', 'classes'])
            ->where('role', 'student')
            ->orderBy('total_grade', 'desc')
            ->take(10)
            ->get();

        // Menyiapkan data untuk view
        $rankedUsers->each(function ($user) {
            $user->class_names = $user->classes->pluck('name')->implode(', ');
            $user->prodi_names = $user->prodi->pluck('name')->implode(', ');
        });

        return view('rank.ranks', compact('rankedUsers'));
    }
}
