@extends('layouts.base')

@section('app-content')
  <div class="wrapper">
    @include('layouts.navbar')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>@yield('page-title')</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                @yield('breadcrumbs')
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        @yield('content')
      </section>
    </div>
  </div>
@endsection
