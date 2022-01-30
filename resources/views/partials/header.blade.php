@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/caro/style.css') }}"> --}}
@endsection

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'YCHomes') }}" srcset=""
                class="logo">
            {{-- {{ config('app.name', 'YCHomes') }} --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Home') }}</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="#about">{{ __('About') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">{{ __('Services') }}</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#contact">{{ __('Contact Us') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#faqs">{{ __('FAQs') }}</a>
                </li>



            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <input type="text" class="form-control rounded ml-3" placeholder="Search YCHomes"
                    aria-label="Search YCHomes" aria-describedby="basic-addon1">
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                           document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
