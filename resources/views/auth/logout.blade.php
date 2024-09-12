<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.title-meta', ['title' => 'Logged Out'])

    @include('layouts.shared.head-css')
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card bg-pattern">
                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <a href="{{ route('home') }}" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="/images/yuwaraja-logo.svg" alt="" height="55">
                                        </span>
                                    </a>
                                    <a href="{{ route('home') }}" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="/images/yuwaraja-logo.svg" alt="" height="55">
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="mt-4">
                                    <div class="logout-checkmark">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 130.2 130.2">
                                            <circle class="path circle" fill="none" stroke="#4bd396" stroke-width="6"
                                                stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                            <polyline class="path check" fill="none" stroke="#4bd396"
                                                stroke-width="6" stroke-linecap="round" stroke-miterlimit="10"
                                                points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                                        </svg>
                                    </div>
                                </div>

                                <h3>Sampai berjumpa kembali!</h3>
                                <p class="text-muted"> Wow kamu berhasil logout dari dashboard! </p>
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-black">Back to <a href="{{ route('login') }}" class="text-dark ms-1"><b>Sign
                                        In</b></a></p>
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
