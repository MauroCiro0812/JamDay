<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/color-modes.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/circular-image.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="{{ asset('css/circular-image.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--libreria de font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>

    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">

                @guest
                    <a class="navbar-brand" href="{{ url('/welcome') }}" style="color: var(--text-color);">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                @else
                    <a class="navbar-brand" href="{{ url('/home') }}" style="color: var(--text-color);">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                @endguest

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- logo del carrito -->
                        @if (Cart::content()->count())
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="{{ route('carrito.index') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                                        viewBox="0 0 16 16" style="margin-top: 10px;">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{ Cart::content()->count() }}
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            </li>
                        @endif


                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"
                                        style="color: var(--text-color);">{{ __('Login') }} </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}"style="color: var(--text-color);">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                    style="color: var(--text-color);">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    @if (Auth::user()->type == 'user')
                                        <a class="dropdown-item" href="{{ route('perfilUser') }}">
                                            {{ __('Perfil') }}
                                        </a>
                                    @elseif(Auth::user()->type == 'admin')
                                        <a class="dropdown-item" href="{{ route('perfilAdmin') }}">
                                            {{ __('Perfil') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                                            {{ __('Panel de administrador') }}
                                        </a>
                                    @elseif(Auth::user()->type == 'manager')
                                        <a class="dropdown-item" href="{{ route('perfilManager') }}">
                                            {{ __('Perfil') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                                            {{ __('Panel de manager') }}
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('supportUser.index') }}">
                                        {{ __('Ayúda y soporte ténico') }}
                                    </a>

                                    <hr>

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

                            <div display: flex; justify-content: flex-end;">
                                @if (filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL))
                                    <img class="circular-image-avatar" src="{{ Auth::user()->avatar }}">
                                @else
                                    <img class="circular-image-avatar"
                                        src="{{ Storage::disk('s3')->url(Auth::user()->avatar) }}">
                                @endif
                            </div>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        @yield('footer')
    </footer>

</body>

</html>
