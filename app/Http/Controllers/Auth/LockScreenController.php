<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LockScreenController extends Controller
{
    public function showLockScreen()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('auth.lock-screen');
    }

    public function unlockScreen(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'The provided password does not match our records.',
            ]);
        }

        return redirect()->intended('home');
    }
}
