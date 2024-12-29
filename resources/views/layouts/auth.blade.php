<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('dashboard.includes.style')
    @stack('style')

</head>

<body>
    @include('dashboard.includes.header')

    @yield('content')

    @include('dashboard.includes.footer')

    @stack('prepend-script')
    <script src='{{ asset("/js/jquery.min.js") }}'></script>
    <script src='{{ asset("/assets/js/bootstrap.bundle.min.js") }}'></script>
    @stack('script')
</body>

</html>
