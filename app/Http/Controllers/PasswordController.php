<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('account.password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        $newPassword = Hash::make($request->new_password);
        Log::info('New password hashed: ' . $newPassword);

        DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => $newPassword, 'updated_at' => now()]);

        Log::info('Password updated for user: ' . $user->id);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
