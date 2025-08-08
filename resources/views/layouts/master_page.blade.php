<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')

  <style>
    /* Animasi slide-in */
@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.slide-in {
    animation: slideInRight 0.5s ease-out;
}

/* Responsive toast di mobile */
@media (max-width: 576px) {
    .toast-container {
        width: 90%;
        left: 50%;
        transform: translateX(-50%);
        right: auto !important;
    }
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')
  <!-- end sidebar container -->
  
  <!-- Content Wrapper. Contains page content -->
  
  @yield('content')
 
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')
  <!-- end footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('layouts.script')
</body>
</html>