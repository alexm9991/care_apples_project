<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Manzanas del cuidado') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- CSS -->


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    h1 {
        background-color: #6b4291;
        color: white
    }

    table,
    th,
    td {
        background-color: white
    }

    li a:hover {
        text-decoration: underline !important;
        color: #23C615 !important;
        font-size: 20px !important;
    }
    </style>

</head>

<body>

    <div >
        <div id="app" >
            <nav style="margin-left:0" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="">
                    <!-- logo -->
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="images/logom.png" width="30" style="padding:0">
                    </a>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Manzanas del Cuidado') }}
                    </a>
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
                            <!-- Authentication Links -->
                            @guest @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif @else
                            <!-- inicio botones -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service_type_category.index') }}"> SERVICIO TIPO
                                    CATEGORIA </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('municipality.index') }}"> MUNICIPIOS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('apple.index') }}"> MANZANAS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service_type.index') }}"> TIPOS SERVICIO </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service_category.index') }}">CATEGORIA SERVICIO </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{--{{ route('service.index') }}--}}"> SERVICIOS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{--{{ route('woman.index') }}--}}"> MUJERES </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{--{{ route('booking.index') }}--}}"> RESERVAS </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{--{{ route('booking.index') }}--}}">ESTABLECIMIENTO </a>
                            </li>
                            <!-- Fin botones -->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

            <main class="py-4">
                @yield('content')
            </main>
        </div>
	
</body>

</html>