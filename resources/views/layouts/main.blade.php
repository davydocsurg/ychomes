<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'YCHomes') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    {{-- font-awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.css') }}">
    {{-- anime --}}
    <link rel="stylesheet" href="{{ asset('assets/animes/anime.css') }}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body>

    <div id="app">

        <header id="header" class="fixed-top justify-content-center align-items-center header-transparent">
            <nav id="navbar"
                class="navbar justify-content-center align-items-center text-center navbar-expand-lg bg-transparent mx-auto">
                <div class="container">
                    {{-- <a class="navbar-brand" href="/">Brand</a> --}}
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation" data-aos="slide-left">
                        <span class="fas fa-grip-lines toggler text-white"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav mx-auto">
                            {{-- <li class="nav-item"><a class="nav-link" href="/"> Home </a></li> --}}
                            <li class="nav-item"><a class="nav-link" id="navL1" href="#about"> About </a></li>
                            <li class="nav-item"><a class="nav-link" id="navL2" href="#services"> Services </a></li>
                            <li class="nav-item"><a class="nav-link" id="navL3" href="#contact"> Contact </a></li>

                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div>

            </nav>
        </header>

        {{-- <a id="scrollTop" class="scroll-to-top bg-warning text-white d-none"
            style="display: inline; border-radius: 2px ;">
            <i class="fas fa-chevron-up py-3 px-3"></i>
        </a> --}}

        @include('partials.intro')
        @include('partials.about')
        @include('partials.services')
        @include('partials.contact')

        <footer class="container-fluid footer-bg mt-5"
            style="max-height: 350rem !important; min-height: 10rem !important;">
            <div class="container py-3">
                <div class="text-center">
                    <h2 class="text-white font-weight-bold">
                        Oluwaseun Ajani
                    </h2>

                    <p class="text-white ft-quote">
                        " Don't just dream a good marriage...plan, prepare and work at having one."
                    </p>
                </div>
                <div class="" style="">
                    <div class="d-flex justify-content-center mx-auto text-center pt-3 foot-cont">
                        <div class="col-lg-4 col-md-4 col-sm-6" data-toggle="tooltip" data-placement="top"
                            title="Facebook">
                            <a href="https://www.facebook.com/oluwaseun.ajani.125" target="_blank"
                                rel="noopener noreferrer">
                                <span class="soc-links text-white bg-warning pt-4 pb-3">
                                    <i class="fab fa-facebook p-3"></i>
                                </span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 mb-2" data-toggle="tooltip" data-placement="top"
                            title="LinkedIn">
                            <a class="" href="
                            https://www.linkedin.com/in/seunajani" target="_blank" rel="noopener noreferrer">
                                <span class="soc-links text-white bg-warning pt-4 pb-3">
                                    <i class="fab fa-linkedin p-3"></i>
                                </span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 mb-2" data-toggle="tooltip" data-placement="top"
                            title="Instagram">
                            <a class="" href="https://www.instagram.com/seunajani.ng/" target="_blank"
                                rel="noopener noreferrer">
                                <span class="soc-links text-white bg-warning pt-4 pb-3">
                                    <i class="fab fa-instagram p-3"></i>
                                </span>
                            </a>
                        </div>

                    </div>
                    <br>
                    <div class="justify-content-center text-center text-white">
                        <span class="copyrights">
                            <b class="text-white fas fa-copyright"></b> <b class="year"></b>. Developed by <b>
                                <a href="http://inforealmsolutions.com" class="text-white text-hover-warning" target="_blank" rel="noopener noreferrer">
                                    Information Realm
                                </a>
                                </b>. All Rights Reserved.
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/animes/anime.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 800, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>
