<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark indigo darken-4 navbar-expand-lg x scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/prototipo1.4.1/public/#">ORSEPAL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('clientes.index') }}">Mis Clientes</a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('proveedors.index') }}">Mis Proveedores</a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('compras.index') }}">Mis Compras</a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('ventas.index') }}">Mis Ventas</a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('citas.index') }}">Mis Citas</a>
                        </li>
                    </ul>
                    <div class="navbar-nav top-right links " id="navbarSupportedContent">
                         @if (Auth::guest())
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
</body>
</html>
