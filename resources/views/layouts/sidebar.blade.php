<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-primary">
  <!-- Brand Logo -->
  <a href="{{ route('home') }}" class="brand-link _bg-primary">
    <span class="brand-text font-weight-light">DPE</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    @if (auth()->user())
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link @if (Request::is('home')) active @endif">
              <i class="nav-icon fa fa-home"></i>
              <p>Inicio</p>
            </a>
          </li>
          {{-- <li class="nav-item">
						<a href="{{route('matriculados')}}" class="nav-link @if (Request::is('matriculados')) active @endif">
							<i class="nav-icon fa fa-briefcase"></i>
							<p>Matriculados</p>
						</a>
					</li> --}}
          <li class="nav-item">
            <a href="#" class="nav-link @if (Request::is('suministros')) active @endif">
              <i class="nav-icon fa fa-server"></i>
              <p>Suministros</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @if (Request::is('deudas')) active @endif">
              <i class="nav-icon fa fa-hand-holding-usd"></i>
              <p>Detalle de deuda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @if (Request::is('facturas')) active @endif">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>Facturas</p>
            </a>
          </li>
        </ul>
      </nav>
  @endif
  <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
