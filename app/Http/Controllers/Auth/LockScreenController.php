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

        session(['locked' => true]);

        return view('auth.lock-screen', ['user' => Auth::user()]);
    }

    public function unlockScreen(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Waduh, password kamu tidak benar hehe',
            ]);
        }

        session(['locked' => false]);

        return redirect()->intended('index');
    }
}
