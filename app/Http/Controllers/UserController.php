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

        return view('data-masters.users-edit', compact('user', 'prodi', 'classes', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'prodi_id' => 'nullable|exists:prodi,id',
            'class_id' => 'nullable|exists:classes,id',
            'role' => 'required|in:admin,teacher,student'
        ]);

        $user = User::findOrFail($id);
        $data = $request->only(['phone', 'description', 'role']);
        $data['updated_at'] = now();

        $user->update($data);

        // Update class_user pivot table
        if ($request->class_id) {
            DB::table('class_user')->updateOrInsert(
                ['user_id' => $user->id],
                ['class_id' => $request->class_id, 'updated_at' => now()]
            );
        } else {
            DB::table('class_user')->where('user_id', $user->id)->delete();
        }

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

        return redirect()->route('data-masters.users')->with('success', 'Profile updated successfully.');
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

        return response()->json(['success' => 'User deleted successfully.']);
    }
}
