<aside class="main-sidebar sidebar-dark-danger elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link navbar-danger">
    <img src="{{ asset('dist/img/logo.jpg') }}"
         alt="AdminLTE Logo"
         class="brand-image img-square elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">IMS</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link {{ request()->is(['home', 'home/*']) ? 'active' : '' }}">
            @if (Auth::user()->role == 3)
              <i class="nav-icon fas fa-heartbeat"></i>
              <p>
                Data Kesehatan
              </p>
            @else
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            @endif
          </a>
        </li>
        @admin
        <li class="nav-item has-treeview {{ request()->is(['user', 'user/create']) ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ request()->is(['user', 'user/create']) ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Daftar User
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user.create') }}" class="nav-link {{ request()->is('user/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-plus"></i>
                <p>
                  Tambah User
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('department.index') }}" class="nav-link {{ request()->is('department') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Department
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('penyakit.index') }}" class="nav-link {{ request()->is('penyakit') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Kondisi
            </p>
          </a>
        </li>
        @endadmin
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Logout
            </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </nav>
  </div>
</aside>