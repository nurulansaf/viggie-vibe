<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Klinik Bersalin Hyung.ie') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- PUBLIK ASSETS --}}
    <link rel="shortcut icon" href="{{asset('publik/img/lg-klinik-fav.png')}}">
    <link rel="stylesheet" href="{{asset('publik/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('publik/css/style.css')}}">
    <link rel="preload" href="{{asset('publik/css/fonts/dm.css')}}" as="style" onload="this.rel='stylesheet'">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('publik/js/plugins.js')}}"></script>
    <script src="{{asset('publik/js/theme.js')}}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
