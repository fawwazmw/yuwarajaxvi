<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.title-meta', ['title' => 'Lock Screen'])

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
                                <h4 class="text-uppercase mt-0">Welcome Back</h4>
                                <h5 class="mb-4">{{ Auth::user()->name }}</h5> <!-- Display logged-in user's name -->
                                <img src="/images/users/user-1.jpg" width="88" alt="user-image"
                                    class="rounded-circle img-thumbnail">
                                <p class="text-muted my-4">Enter your password to login again</p>
                            </div>

                            <form method="POST" action="{{ route('unlock-screen') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" required id="password" name="password"
                                        placeholder="Enter your password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="mb-0 text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Not you? return <a href="{{ route('login') }}"
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
