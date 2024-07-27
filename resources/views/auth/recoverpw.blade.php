<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.title-meta', ['title' => 'Reset Password'])

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
                                <h4 class="text-uppercase mt-0 mb-3">Reset Password</h4>
                                <p class="text-muted mb-0 font-13">Enter your email address and we'll send you an email
                                    with instructions to reset your password.</p>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
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

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email" required
                                        placeholder="Enter your email">
                                </div>

                                <div class="mb-3 text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> Reset Password </button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-black">Back to <a href="{{ route('login') }}" class="text-dark ms-1"><b>Log
                                        in</b></a></p>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end page -->

    <!-- App js -->
    @vite('resources/js/app.js')

</body>

</html>
