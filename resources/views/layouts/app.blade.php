<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/caro/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caro/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caro/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/caro/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/caro/caro2.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/caro/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">

    @yield('css')
</head>

<body>
    <div id="app">
        @include('partials.header')
        <main class="py-">
            @yield('content')
        </main>
        @include('partials.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/caro/jquery.min.js') }}"></script>
    <script src="{{ asset('js/caro/popper.js') }}"></script>
    <script src="{{ asset('js/caro/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/caro/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/caro/main.js') }}"></script>
    <script src="{{ asset('js/caro/caro2.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}" ></script> --}}

    @yield('js')
</body>

</html>
