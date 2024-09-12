<?php

// app/Http/Controllers/ProfileController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\ClassRoom;
use App\Models\Prodi;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        $classes = ClassRoom::all();
        $prodi = Prodi::all();
        return view('account.profile', compact('user', 'prodi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'nim' => 'nullable|numeric|unique:users,nim,' . Auth::id(),
            'phone' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'prodi_id' => 'nullable|exists:prodi,id'
        ]);

        $user = Auth::user();
        $data = $request->only(['name', 'email', 'nim', 'phone', 'description']);
        $data['updated_at'] = now();

        if ($request->hasFile('profile_image')) {
            if ($request->file('profile_image')->getSize() > 2048 * 1024) {
                return redirect()->back()->with('error', 'File size exceeds 2MB.');
            }

            if ($user->profile_image && Storage::disk('public')->exists(str_replace('storage/', '', $user->profile_image))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $user->profile_image));
                Log::info('Old profile image deleted: ' . $user->profile_image);
            }

            $path = $request->file('profile_image')->store('profile_images', 'public');
            $data['profile_image'] = 'storage/' . $path;
            Log::info('New profile image stored: ' . $data['profile_image']);
        }

        DB::table('users')->where('id', $user->id)->update($data);

        // Update prodi_user pivot table
        if ($request->prodi_id) {
            DB::table('prodi_user')->updateOrInsert(
                ['user_id' => $user->id],
                ['prodi_id' => $request->prodi_id, 'updated_at' => now()]
            );
        } else {
            DB::table('prodi_user')->where('user_id', $user->id)->delete();
        }

        Log::info('User profile updated: ' . $user);

        return redirect()->back()->with('success', 'Nice profil kamu berhasil di perbarui!');
    }
}
