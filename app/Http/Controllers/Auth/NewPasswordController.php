<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;

class NewPasswordController extends Controller
{
    public function create(Request $request, $token)
    {
        // Extract email from query string
        $email = $request->query('email');
    
        // Pass token and email to the view
        return view('auth.reset-password', ['token' => $token, 'email' => $email]);
    }

    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'token' => 'required', // Token must be present
            'email' => 'required|email|exists:users,email', // Email must be valid and registered
            'password' => 'required|string|confirmed|min:8', // Password must be at least 8 characters and match confirmation
        ], [
            'email.exists' => 'Email not found in our database.',
            'password.confirmed' => 'Password confirmation does not match.',
            'password.min' => 'Password must be at least 8 characters.'
        ]);

        // Retrieve the token from the password_reset_tokens table
        $tokenData = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        // Check if the token is valid and has not expired (assuming token expiry time is 60 minutes)
        if (!$tokenData || Carbon::parse($tokenData->created_at)->addMinutes(60)->isPast()) {
            return redirect()->back()->withErrors(['token' => 'This password reset token is invalid or has expired.']);
        }

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'User not found.']);
        }

        // Hash and update the user's password
        $user->forceFill([
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60), // Update the remember token
        ])->save();

        // Trigger the PasswordReset event
        event(new PasswordReset($user));

        // Optionally: Delete the token from the password_reset_tokens table after use
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Redirect to login page with success message
        return redirect()->route('login')->with('success', 'Password has been reset. You can now log in with your new password.');
    }
}
