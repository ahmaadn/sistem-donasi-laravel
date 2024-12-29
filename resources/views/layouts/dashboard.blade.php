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
    @include('includes.d-header')

    @yield('content')

    @include('includes.d-footer')

    @stack('prepend-script')
    @include('includes.d-script')
    @stack('script')
</body>

</html>
