<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.d-style')
    @stack('style')

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('includes.d-sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('includes.d-header')
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                @yield("content")

                @include('includes.d-footer')
            </div>
        </div>
    </div>

    @stack('prepend-scripts')
    @include('includes.d-script')
    @stack('scripts')
</body>

</html>
