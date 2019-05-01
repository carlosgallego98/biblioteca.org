@extends('layouts.auth')

@section('form')
<form class="card-login text-center" method="POST" action="{{ route('login') }}">
    @csrf
    <!-- Form Card -->
    <div class="card-body py-5">
        <div class="py-3">
            <a href="/">
                <img src="/assets/img/brand/icon_color.png" alt="" class="login-logo">
            </a>
            <h4 class="font-weight-bold text-dark">Iniciar Sesión</h4>
        </div>
        <div class="form-group @error('email') has-danger @enderror">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input class="form-control form-control-alternative @error('email') is-invalid @enderror" value="{{ old('email') }}" type="text" name="email"
                placeholder="Correo Electrónico" required autocomplete="email" autofocus>
            </div>
        </div>

        <div class="form-group  @error('password') has-danger @enderror"">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input class="form-control form-control-alternative @error('password') is-invalid @enderror" name="password" type="password" required autocomplete="current-password"
                placeholder="Contraseña">
            </div>
        </div>

        <div class="form-group">
                <div class="custom-control custom-checkbox">
                        <input class="custom-control-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">
                           Recordar mis Datos
                        </label>
                    </div>
        </div>

        <button type="submit" class="btn btn-success mb-3"> <i class='fa fa-sign-in'></i> Iniciar
            Sesión</button>
            <p>¿No tienes cuenta? <a href="#" class="font-weight-bold">Regístrate aqui</a></p>
        </div>
    </form>
    @endsection
