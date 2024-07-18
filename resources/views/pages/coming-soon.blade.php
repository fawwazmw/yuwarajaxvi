<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Coming Soon'])
    @vite(['resources/js/head.js'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])

</head>

<body class="authentication-bg">

    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="text-center">
                        <a href="{{ route('any', 'index') }}" class="logo">
                            <img src="/images/logo-dark.png" alt="" height="22" class="logo-light mx-auto">
                        </a>

                        <h3 class="mt-4">Stay tunned, we're launching very soon</h3>
                        <p class="text-muted">We're making the system more awesome.</p>

                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <div data-countdown="2024/11/19" class="counter-number"></div>
                </div> <!-- end col-->
            </div> <!-- end row-->

        </div>
    </div>

    <footer class="footer footer-alt fw-medium">
        <h5 class="text-black-50">
            <script>
                document.write(new Date().getFullYear())
            </script> © Attex - Coderthemes.com
        </span>
    </footer>

    @vite(['resources/js/pages/coming-soon.init.js'])

</body>

</html>
