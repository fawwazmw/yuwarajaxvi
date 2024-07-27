<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared.title-meta', ['title' => 'Confirm Email'])

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
                        <p class="text-white mt-2 mb-4">Responsive Admin Dashboard</p>
                    </div>
                    <div class="card text-center">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <h4 class="text-uppercase mt-0">Confirm Email</h4>
                            </div>
                            <img src="/images/mail_confirm.png" alt="img" width="86" class="mx-auto d-block" />
                            <p class="text-muted font-14 mt-2"> An email has been sent to
                                <b>{{ auth()->user()->email }}</b>.
                                Please check for an email from our company and click on the included link to
                                verify your email address.
                            </p>
                            <a href="{{ route('home') }}"
                                class="btn d-block btn-pink waves-effect waves-light mt-3">Back to Home</a>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end page -->

    <!-- App js -->
    @vite('resources/js/app.js')

</body>

</html>
