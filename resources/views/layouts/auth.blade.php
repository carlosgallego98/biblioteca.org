<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Biblioteca.org desarrollada por jean Carlos Gallego.">
    <meta name="author" content="Jean Carlos Gallego">
    <title>Iniciar Sesión - Biblioteca.org</title>
    <!-- Favicon -->
    <link href="{{ asset("/assets/img/brand/favicon.png") }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <!-- Icons -->
    <link href="{{ asset("/assets/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset("/assets/css/argon.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/assets/css/login.css") }}">
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row flex-center justify-content-center"> <!-- Row -->
                <div class="ml-auto col-lg-5"> <!-- Col -->
                    @yield('form')
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        <b><i class="fa fa-times"></i></b>
                        {{ $error }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <footer class="footer bg-transparent text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 my-2">
                    Desarrollado por <span class="font-weight-bold">Jean Carlos Gallego</span> @2019
                </div>
                <div class="col-md my-2">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-facebook"></i>
                                Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-instagram"></i>
                                    Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" class="">
                                        <i class="fa fa-html5 "></i>
                                        Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </body>
            <!-- Core -->
            <script src="{{ asset("assets/vendor/jquery/jquery.min.js") }}"></script>
            <script src="{{ asset("assets/vendor/popper/popper.min.js") }}"></script>
            <script src="{{ asset("assets/vendor/bootstrap/bootstrap.min.js") }}"></script>
            <!-- Argon JS -->
            <script src="{{ asset("assets/js/argon.min.js") }}"></script>
            <script src="{{ asset("assets/js/main.js") }}"></script>
            </html>
