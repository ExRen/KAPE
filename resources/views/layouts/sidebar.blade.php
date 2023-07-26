{{-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside> --}}
{{-- !-- Main Sidebar Container --> --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  {{-- <a href="index3.html" class="brand-link">
    <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
        class="user-image img-circle elevation-2" alt="User Image" style="width: 20%; background-color:white;">
    <span class="brand-text font-weight-light">Admin</span>
  </a> --}}
  <a href="#" class="brand-link logo-switch">
    <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
    class="brand-image-xl logo-xs" alt="AdminLTE Docs Logo Small" style="width: 20%; background-color:white;">
    <img src="{{URL('logo/logo.png') }}" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 12px">
  </a>

  <!-- Sidebar -->
  {{-- <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <form class="form-inline">
            <div class="input-group">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <div class="sidebar-custom">
            <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
            <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
          </div>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
