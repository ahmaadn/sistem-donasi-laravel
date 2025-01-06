<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('style')

</head>

<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    @stack('prepend-scripts')
    @include('includes.script')
    @stack('scripts')
</body>

</html>
