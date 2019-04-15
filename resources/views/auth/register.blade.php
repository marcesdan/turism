@extends('layouts.auth')
@section('app-content')
  <div class="register-box">
    <div class="register-logo">
      <a href="#"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">{{ ucwords($url) }} {{ __('Register') }}</p>
        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <input
              type="text"
              class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
              name="nombre"
              value="{{ old('name') }}"
              placeholder="{{ __('Name') }}"
              required autofocus
            >
            @if ($errors->has('nombre'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('nombre') }}</strong>
              </span>
            @endif
            <div class="input-group-append">
              <span class="fa fa-user input-group-text"></span>
            </div>
          </div>
          <!-- /.input-group nombre -->
          <div class="input-group mb-3">
            <input
              name="email"
              type="email"
              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
              value="{{ old('email') }}"
              placeholder="{{ __('E-Mail Address') }}"
              required
            >
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
            <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
            </div>
          </div>
          <!-- /.input-group email -->
          <div class="input-group mb-3">
            <input
              type="password"
              name="password"
              class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
              placeholder="{{ __('Password') }}"
              required
            >
            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <!-- /.input-group password -->
          <div class="input-group mb-3">
            <input
              name="password_confirmation"
              type="password"
              class="form-control"
              placeholder="{{ __('Confirm Password') }}"
              required
            >
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <!-- /.input-group password-confirm -->
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
@endsection
