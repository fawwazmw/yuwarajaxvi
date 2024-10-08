<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Error 500'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a href="{{ route('any', 'index') }}" class="logo">
                            <img src="/images/logo-dark.png" alt="" height="22" class="logo-light mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center">
                                <h1 class="text-error">500</h1>
                                <h3 class="mt-3 mb-2">Internal Server Error</h3>
                                <p class="text-muted mb-3">Why not try refreshing your page? or you can contact <a href="" class="text-dark"><b>Support</b></a></p>

                                <a href="{{ route('any', 'index') }}" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
                            </div>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-white-50">
            <script>
                document.write(new Date().getFullYear())
            </script> © Jidox - Coderthemes.com
        </span>
    </footer>

    @vite(['resources/js/app.js'])

</body>

</html>
