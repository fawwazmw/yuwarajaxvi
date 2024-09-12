<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClassRoom;
use App\Models\Prodi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $prodi = Prodi::all();
        $classes = ClassRoom::all();
        $roles = ['admin', 'teacher', 'student'];
        $statusOptions = ['active', 'not_active']; // Status options

        return view('data-masters.users-edit', compact('user', 'prodi', 'classes', 'roles', 'statusOptions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'prodi_id' => 'nullable|exists:prodi,id',
            'class_id' => 'nullable|exists:classes,id',
            'role' => 'nullable|in:admin,teacher,student', // Role now nullable
            'user_status_verified' => 'nullable|in:active,not_active', // Status now nullable
        ]);

        $user = User::findOrFail($id);
        $data = $request->only(['phone', 'description', 'role', 'user_status_verified']); // Data tidak wajib
        $data['updated_at'] = now();

        $user->update($data);

        // Update class_user pivot table jika ada class_id
        if ($request->class_id) {
            DB::table('class_user')->updateOrInsert(
                ['user_id' => $user->id],
                ['class_id' => $request->class_id, 'updated_at' => now()]
            );
        } else {
            DB::table('class_user')->where('user_id', $user->id)->delete();
        }

        // Update prodi_user pivot table jika ada prodi_id
        if ($request->prodi_id) {
            DB::table('prodi_user')->updateOrInsert(
                ['user_id' => $user->id],
                ['prodi_id' => $request->prodi_id, 'updated_at' => now()]
            );
        } else {
            DB::table('prodi_user')->where('user_id', $user->id)->delete();
        }

        Log::info('User profile updated: ' . $user);

        return redirect()->route('data-masters.users')->with('success', 'Profile berhasil di perbarui yay!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Hapus relasi pivot
        DB::table('class_user')->where('user_id', $user->id)->delete();
        DB::table('prodi_user')->where('user_id', $user->id)->delete();

        // Hapus pengguna
        $user->delete();

        Log::info('User deleted: ' . $user);

        // Redirect ke halaman data-masters.users dengan notifikasi success
        return redirect()->route('data-masters.users')->with('success', 'Yay user berhasil dihapus');
    }
}
