<!DOCTYPE html class="h-100">
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body class="h-100">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
    </form>
    <div id="app" class="h-100">

        <b-navbar toggleable type="dark" variant="info">
            <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>
            <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
            <b-collapse is-nav id="nav_text_collapse">
                <b-navbar-nav class="ml-auto">
                @guest
                    <b-nav-item href="{{ route('login') }}">Login</b-nav-item>
                    <b-nav-item href="{{ route('register') }}">Register</b-nav-item>
                    <!-- Navbar dropdowns -->
                @else    
                    <b-nav-item-dropdown text="{{auth()->user()->name}}" right>
                        <b-dropdown-item href="#" @click="logout">Cerrar sesion</b-dropdown-item>
                    </b-nav-item-dropdown>
                @endguest    
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
