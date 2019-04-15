@extends('layouts.base-web')

@section('app-content')
<div class="login-container" style="background-image: url({{asset('/images/principal-fondo.jpg')}}); background-size: cover; background-position: top center">
    <div style="padding-top: 20vh" class="container text-blanco justify-content-center">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                    <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                    <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-7">
                    <button type="submit" class="btn btn-success">
                        Cambiar contraseña
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection