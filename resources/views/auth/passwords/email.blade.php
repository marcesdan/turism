@extends('layouts.base-web')

@section('app-content')
<div class="login-container" style="background-image: url({{asset('/images/principal-fondo.jpg')}}); background-size: cover; background-position: top center">
    <div style="padding-top: 20vh" class="container text-blanco justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <div class="col-md-6 offset-md-3">
                    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-6">
                    <button type="submit" class="btn btn-success">
                        Enviar link para cambiar contraseña
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
