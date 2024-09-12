<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.shared.title-meta', ['title' => 'Set New Password'])
    @include('layouts.shared.head-css')
</head>
<body class="authentication-bg authentication-bg-pattern">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="text-center">
                        <a href="{{ route('home') }}">
                            <img src="/images/yuwaraja-logo.svg" alt="" height="55" class="mx-auto">
                        </a>
                        <p class="text-white mt-2 mb-4">Student Dashboard Vokasi UB</p>
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0 mb-3">Set New Password</h4>
                                <p class="text-muted mb-0 font-13">Enter your new password below to reset it.</p>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Form untuk reset password -->
                            <form action="{{ route('password.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <!-- Hidden Input untuk Token -->
                                <input type="hidden" name="token" value="{{ $token }}">
                                
                                <!-- Hidden Input untuk Email -->
                                <input type="hidden" name="email" value="{{ $email }}">

                                <!-- New Password Field -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input class="form-control" type="password" id="password" name="password" required>
                                </div>
                                
                                <!-- Confirm Password Field -->
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Set New Password</button>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-black">Back to <a href="{{ route('login') }}" class="text-dark ms-1"><b>Log in</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
