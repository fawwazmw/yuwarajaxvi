<!DOCTYPE html>
<html lang="en" data-layout-mode="horizontal">

<head>
    @include('layouts.shared/title-meta', ['title' => $page_title])
    @yield('css')
    @vite(['resources/js/head.js'])

    @include('layouts.shared/head-css')
</head>

<body data-layout-mode="horizontal" data-layout-color="light" data-layout-size="fluid"
    data-topbar-color="dark" data-leftbar-position="fixed">

    <div id="wrapper">

        @include('layouts.shared/topbar-dark')
        @include('layouts.shared/horizontal-nav')

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
                    @include('layouts.shared/page-title', [
                        'title' => $page_title,
                        'sub_title' => $sub_title,
                    ])
                    @yield('content')
                </div>
            </div>
            @include('layouts.shared/footer')
        </div>

    </div>

    @include('layouts.shared/right-sidebar')

    @yield('script')

    @vite(['resources/js/app.js', 'resources/js/layout.js'])
</body>

</html>
