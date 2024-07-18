<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => $page_title])
    @yield('css')
    @vite(['resources/js/head.js'])

    @include('layouts.shared/head-css')
</head>

<body data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

    <div id="wrapper">

        @include('layouts.shared/topbar',['title' => $page_title])
        @include('layouts.shared/left-sidebar')

        <div class="content-page">
            <div class="content">
                <!-- Start Content-->
                <div class="container-fluid">
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
