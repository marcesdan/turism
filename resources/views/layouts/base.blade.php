<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

{{--  <!-- Fonts -->--}}
{{--  <link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
{{--  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

<!-- Styles -->
  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
  {{--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">--}}
  {{--  <!-- Select2 -->--}}
  {{--  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}

  @stack('before-head-close')
</head>
<body class="skin-blue">
<div id="app">
  @yield('app-content')
</div>

<!-- Scripts -->
<script src="{{ asset(mix('/js/manifest.js')) }}"></script>
<script src="{{ asset(mix('/js/vendor.js')) }}"></script>
<script src="{{ asset(mix('/js/app.js')) }}"></script>

<!-- Select2 -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

{{--<script>--}}
{{--  window.api = {--}}
{{--    'base': "{{env('DPE_API_BASE')}}",--}}
{{--    'version': "{{env('DPE_API_VERSION')}}"--}}
{{--  }--}}
{{--</script>--}}

@stack('before-body-close')
</body>
</html>
