@extends('layouts.auth')
@section('app-content')
  <div class="login-box">
    <div class="login-logo">
      <b>Admin</b>LTE
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg h4">{{ ucwords($url) }} {{ __('Login') }}</p>
        <form method="post" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <input
              name="email" type="email"
              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
              value="{{ old('email') }}"
              placeholder="{{ __('E-Mail Address') }}"
              required autofocus
            >
            <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span>
            </div>
            @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
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
          <div class="row">
            <div class="col-8">
              <div class="checkbox icheck">
                <label>
                  <input
                    type="checkbox"
                    name="remember"
                    {{ old('remember') ? 'checked' : '' }}
                  >
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </form>
        <p class="mb-1">
          <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
@endsection
