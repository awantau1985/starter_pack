<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <span class="navbar-text">
      
     
      </span>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" >
          <i class="fa fa-user" ></i>
          <span class="badge badge-warning navbar-badge"></span>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
         

          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="logout();
                  event.preventDefault();
                  document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i> {{ __('Logout') }}
              </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              <input type="hidden" name="web_status" value="Logout">
              <input type="hidden" name="user" value="{{Auth::user()->id}}">
          </form>
        </div>
      </li>
      <span class="navbar-text" id="status_page"></span>
      
    </ul>
  </nav>
