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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    {{--    <link rel="stylesheet" href="//unpkg.com/leaflet/dist/leaflet.css" />--}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                    <img src="img/logouto.png" alt="" width="35">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @if(Auth::user()->tipo=='ADMIN')
                            <router-link
                                to="/gestiones"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos">Gestiones</a>
                                </li>
                            </router-link>
                            <router-link
                                to="/registros"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos">Registros</a>
                                </li>
                            </router-link>
                        @else
                            <router-link
                                to="/antiguo"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos">Postulante Antiguo</a>
                                </li>
                            </router-link>
                            <router-link
                                to="/nuevo"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos">Postulante Nuevo</a>
                                </li>
                            </router-link>
                            <router-link
                                to="/repostulantes"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos">Repostulante</a>
                                </li>
                            </router-link>
                        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
