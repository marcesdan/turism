<!-- Navbar -->
<nav class="main-header navbar navbar-expand border-bottom navbar-light bg-primary">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
  </ul>
  @if (auth()->user())
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
          {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" style="color:black !important" class="dropdown-item">Perfil</a>
          <form action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <button type="submit" class="dropdown-item">{{ __('Logout') }}</button>
          </form>
        </div>
      </li>
    </ul>
  @endif
</nav>
<!-- /.navbar -->
