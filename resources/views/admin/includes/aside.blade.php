<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Booking Clone</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
  


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link {{Request::is('home')?'active':''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Home
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          {{-- <ul class="nav nav-treeview">
         
            <li class="nav-item">
              <a href="#" class="nav-link {{Request::is('users')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
          </ul> --}}
        </li> <li class="nav-item">
          <a href="" class="nav-link {{Request::is('users')?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>
             users
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link {{Request::is('stays')?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>
             Stays
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('admin/cars')}}" class="nav-link {{Request::is('cars')?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>
             cars
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li> <li class="nav-item">
          <a href="" class="nav-link {{Request::is('taxis')?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>
             taxis
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li> <li class="nav-item">
          <a href="" class="nav-link {{Request::is('flights')?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>
             flights
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li> <li class="nav-item">
          <a href="" class="nav-link {{Request::is('attractions')?'active':''}}">
            <i class="nav-icon fas fa-th"></i>
            <p>
             attractions
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
