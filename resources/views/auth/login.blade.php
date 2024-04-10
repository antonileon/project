@extends('layouts.auth')
@section('title') Inicio de sesión @endsection
@section('content')
<!-- CONTAINER OPEN -->
<div class="col col-login mx-auto text-center">
    <a href="{{ route('login') }}" class="text-center">
        <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img" alt="">
    </a>
</div>
<div class="container-login100">
    <div class="wrap-login100 p-0">
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                    Inicio de sesión
                </span>
                <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                    <input placeholder="Email" id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                    </span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                    <input placeholder="Password" id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                    </span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if (Route::has('password.request'))
                <div class="text-end pt-1">
                    <p class="mb-0"><a href="{{ route('password.request') }}" class="text-primary ms-1">¿ Olvidó su contraseña ?</a></p>
                </div>
                @endif
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn btn-primary">
                        Iniciar sesión
                    </button>
                </div>
                @if (Route::has('register'))
                <div class="text-center pt-3">
                    <p class="text-dark mb-0">¿ No tienes cuenta?<a href="{{ route('register') }}" class="text-primary ms-1">Registrarse</a></p>
                </div>
                @endif
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center my-3">
                <a href="javascript:void(0)" class="social-login  text-center me-4">
                    <i class="fa fa-google"></i>
                </a>
                <a href="javascript:void(0)" class="social-login  text-center me-4">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="javascript:void(0)" class="social-login  text-center">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection
