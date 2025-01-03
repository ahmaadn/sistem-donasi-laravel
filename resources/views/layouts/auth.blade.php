<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.dashboard.style')
    @stack('style')

</head>

<body>
    @yield('content')

    @stack('prepend-scripts')
    <script src='{{ asset("js/jquery.min.js") }}'></script>
    <script src='{{ asset("js/dashboard/bootstrap.bundle.min.js") }}'></script>
    <script src='{{ asset("js/toastr.min.js") }}'></script>
    @stack('scripts')
</body>

</html>
