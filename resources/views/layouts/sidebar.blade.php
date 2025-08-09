<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="{{route('home')}}" class="brand-link">
      <!-- <img src="https://desk.zanroo.com/static/img/logo/zanroo-new.png" alt="AdminLTE Logo" class="brand-image " style="height:50px;"> -->
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{ asset('img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div> -->
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              {{-- <i class="nav-icon far fa-calendar-alt"></i> --}}
              <p>
                Dashboard
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          @include('layouts.sidebar_settings')
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>