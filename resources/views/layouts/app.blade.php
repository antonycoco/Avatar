<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Avatar') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/traitement_cropper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/traitement_cropper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Avatar') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @admin
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ currentRoute( route('validate.index')) }}"
                       href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        @lang('Administration')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                        <a class="dropdown-item" href="{{ route('validate.index') }}">
                            <i class="fas fa-plus fa-lg"></i> @lang('Valider les images des profils utilisateurs')
                        </a>
                    </div>
                </li>
                @endadmin
            </ul>
        </div>
        <!-- Right Side Of Navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item{{ currentRoute(route('login')) }}">
                        <a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
                    <li class="nav-item{{ currentRoute(route('register')) }}">
                        <a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a></li>
                @else

                    <li class="nav-item{{ currentRoute(route('profile.show')) }}">
                        <a class="nav-link" href="{{ route('profile.show') }}">
                            <img src="./uploads/avatars/{{ Auth::user()->avatar }}" style="width: 30px ">
                            @lang('Bonjour, '){{ Auth::user()->name }}</a></li>
                    <li class="nav-item">
                        <a id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <!-- Scripts -->

    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
    <script>
        $(() => {
            $('#logout').click((e) => {
                e.preventDefault()
                $('#logout-form').submit()
            })
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/traitement_cropper.js')}}" defer></script>
    <script src="{{asset('js/traitement_main.js')}}" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://fengyuanchen.github.io/js/common.js"></script>
</body>
</html>
