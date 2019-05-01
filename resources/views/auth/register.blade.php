@extends('layouts.auth')

@section('form')
<form class="card-login text-center" action="{{ route('register') }}" method="POST">
        @csrf
        <!-- Form Card -->
        <div class="card-body py-5">
            <div class="py-3">
                <a href="{{ url("/") }}">
                <img src={{ asset("/assets/img/brand/icon_color.png")}} alt="" class="login-logo">
                </a>
                <h4 class="font-weight-bold text-dark">Regístrate</h4>
            </div>

            <div class="form-row">
                <div class="form-group @error('name') is-invalid @enderror mb-3 col-lg-6">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input class="form-control form-control-alternative" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group @error('surname') is-invalid @enderror mb-3 col-lg-6">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input required class="form-control form-control-alternative" type="text"
                        name="surname" placeholder="Apellido">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group @error('email') is-invalid @enderror mb-3 col-12">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input required class="form-control form-control-alternative @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electónico">
                    </div>
                </div>
            </div>

            <div class="form-row @error('password') is-invalid @enderror">
                <div class="form-group @error('password') is-invalid @enderror mb-3 col-12">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input required class="form-control form-control-alternative @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" placeholder="Contraseña">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group @error('password_confirmation') is-invalid @enderror mb-3 col-12">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input required class="form-control form-control-alternative" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mb-3"> <i class='fa fa-save'></i>
                Registrarse</button>
            </div>
        </form>
@endsection
