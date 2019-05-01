<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',"Biblioteca.org")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset("assets/img/brand/favicon.png") }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">    <!-- Icons -->
    <link href="{{ asset("assets/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset("assets/css/argon.css") }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @stack('styles')

</head>
<body>
    <header class="{{ (Request::is("/")) ? "landing" : "" }}">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-success sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset("assets/img/brand/icon_white.png") }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-default">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="index.html">
                                    <img src="{{ asset("assets/img/brand/icon_color.png") }}">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    @auth
                    <ul class="navbar-nav text-center">
                        @hasanyrole('tecnico|bibliotecario')
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route("admin.panel") }}">
                                <span class="nav-link-inner--text">
                                    <i class="fa fa-user"></i>
                                    Panel Administrativo</span>
                                </a>
                            </li>
                            @endrole
                            @role('lector')

                            @endrole
                        </ul>
                        @endauth

                        <ul class="navbar-nav ml-lg-auto text-center">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                                    <span class="nav-link-inner--text">Iniciar Sesión</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                                    <span class="nav-link-inner--text">Regístrate</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link py-1 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ Auth::user()->getAvatar() }}" alt="" class="avatar">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('perfil') }}" class="dropdown-item {{ (Request::is('perfil')) ? "active" : "" }}">
                                        Perfil
                                </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Cerrar Sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest

                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="#">
                                <span class="nav-link-inner--text">
                                    <i class="fa fa-phone"></i>
                                    Contáctanos</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        @if (Request::is("/"))
        <div class="container">
            <div class="hero">
                <h1 class="logo">
                    <img src="{{ asset("assets/img/brand/icon_white.png") }}" alt="Biblioteca.org">
                </h1>
                <h4 class="h4 font-weight-bold text">
                    El mejor lugar para conseguir los libros que necesitas.
                </h4>
            </div>
        </div>
        @endif

        <a class="btn icon icon-shape bg-gradient-dark rounded-circle text-white" id="btn-top" title="Volver al Arriba">
            <i class="fa fa-angle-up"></i>
        </a>
    </header>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
              @if(session()->has('msj'))
                    <div class="alert alert-success" role="alert" data-dimiss="alert">
                      {{session('msj')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      @elseif(count($errors) > 0)
                      <div class="alert alert-danger" role="alert" data-dimiss="alert">
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                        <h6 class="font-weight-bold text-white">Por favor corrija los siguientes errores:</h6>
                        <ul>
                          @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer bg-transparent text-center">
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-7 my-2">
                    Desarrollado por <span class="font-weight-bold">2MBDeveloper</span> @2019
                </div>
                <div class="col-md my-2">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-info">
                                <i class="fa fa-facebook"></i>
                                Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-instagram"></i>
                                    Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-html5 "></i>
                                        Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Core -->
                    <script src={{ asset("assets/vendor/jquery/jquery.min.js") }}></script>
                    <script src={{ asset("assets/vendor/popper/popper.min.js")}}></script>
                    <script src={{ asset("assets/vendor/bootstrap/bootstrap.min.js") }}></script>
                    <!-- Argon JS -->
                    <script src={{ asset("assets/js/argon.min.js")}}></script>
                    <script src={{ asset("assets/js/main.js") }}></script>
                    @stack('scripts')
                </footer>

            </body>
            </html>
