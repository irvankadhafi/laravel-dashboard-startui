<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="with-side-menu">
<div id="app">
    @include('dashboard.layouts.navbar')
    @include('dashboard.layouts.sidebar')
    <div class="page-content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
