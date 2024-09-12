<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $credentials = $this->only('email', 'password');
        $user = User::where('email', $credentials['email'])->first();

        $errors = [];

        if (!$user) {
            $errors['email'] = __('auth.failed_email');
        } else {
            // Validasi password terlepas dari status aktif
            if (!Auth::validate($credentials)) {
                $errors['password'] = __('auth.failed_password');
            }

            // Tambahkan pengecekan user_status_verified setelah validasi password
            if ($user->user_status_verified !== 'active') {
                $errors['email'] = __('Jangan lupa, Hayolo belum konfirmasi ke SPV ya, konfirmasi dulu ya');
            }

            // Jika tidak ada error, baru lakukan attempt untuk autentikasi
            if (empty($errors) && !Auth::attempt($credentials, $this->boolean('remember'))) {
                $errors['password'] = __('auth.failed_password');
            }
        }

        if (!empty($errors)) {
            RateLimiter::hit($this->throttleKey());
            throw ValidationException::withMessages($errors);
        }

        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey()
    {
        return Str::lower($this->input('email')) . '|' . $this->ip();
    }
}
