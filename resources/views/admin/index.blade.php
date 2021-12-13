<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.layout.navbar')

  <!-- /.navbar -->
 <!-- Main Sidebar Container -->
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


<!-- /.control-sidebar -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Starter Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
       <div class="card">
         hello
         {{-- @yield(adminContent) --}}
       </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>

 @include('admin.layout.footer')
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>