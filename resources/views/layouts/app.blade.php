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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
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
                                     <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos"><i class="fa fa-cog"></i> Gestiones</a>
                                </li>
                            </router-link>
                            <router-link
                                to="/registros"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos"><i class="fa fa-user-circle"></i> Registros</a>
                                </li>
                            </router-link>
                        @endif
                            @if(Auth::user()->tipo=='SOCIAL')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-check-double"></i> Revisar y verificar documentacion
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a href="/revisarn" class="dropdown-item"> Nuevo</a>
                                        <a href="/revisara" class="dropdown-item"> Antiguos</a>
                                        <a href="/revisarr" class="dropdown-item"> Repostulantes</a>
                                    </div>
                                </li>
                            @endif
                        @if(Auth::user()->tipo=='ESTUDIANTE')
                            <router-link
                                to="/vantiguo"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos"> <i class="fa fa-upload"></i>Postulante Antiguo</a>
                                </li>
                            </router-link>
                            <router-link
                                to="/vnuevo"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos"><i class="fa fa-file"></i> Postulante Nuevo</a>
                                </li>
                            </router-link>
                            <router-link
                                to="/vrepostulante"
                                v-slot="{ href, route, navigate, isActive }"
                            >
                                <li class="nav-item " v-bind:data-active="isActive">
                                    <a :href="href"  @click="navigate"  class="nav-link" href="Nuevos"><i class="fa fa-check-circle"></i> Repostulante</a>
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
                                    <i class="fa fa-user"></i> {{ Auth::user()->name }}
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
</body>
</html>
