<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.title-meta', ['title' => 'Register'])

    @include('layouts.shared.head-css')
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="text-center">
                        <a href="{{ route('home') }}">
                            <img src="/images/logo-dark.png" alt="" height="22" class="mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Register</h4>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input class="form-control" type="text" id="name" name="name" required
                                        placeholder="Enter your name">
                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email" required
                                        placeholder="Enter your email">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" required
                                        placeholder="Enter your password">
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input class="form-control" type="password" id="password_confirmation"
                                        name="password_confirmation" required placeholder="Confirm your password">
                                </div>

                                <div class="mb-3 d-grid text-center">
                                    <button class="btn btn-primary" type="submit"> Sign Up </button>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}"
                                    class="text-dark ms-1"><b>Sign In</b></a></p>
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
