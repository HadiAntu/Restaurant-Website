<div class="horizontal-menu" color:"#ff4000">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
      <div class="container">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="" href="">
            <img src="assets/images/tab-icon-01.png" alt="logo" />
            <span >Resturent Admin</span>
          </a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
             
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
           <li><x-app-layout>
        </x-app-layout> </li>                
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </div>
    </nav>
    <nav class="bottom-navbar">
      <div class="container">
        <ul class="nav page-navigation">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-monitor-dashboard menu-icon"></i>
              <span class="menu-title">Food Menu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="submenu">
              <ul class="submenu-item">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.addmenu')}}">Add Food</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.allmenu')}}">All Food</a>
                </li>
               
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('user')}}">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-monitor-dashboard menu-icon"></i>
              <span class="menu-title">Cheif</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="submenu">
              <ul class="submenu-item">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('addcheif')}}">Add Chief</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('allcheif')}}">All Cheif</a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('allreservation')}}">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Reservation Table</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.order')}}" class="nav-link" >
                <i class="fas fa-cheese"></i>
              <span class="menu-title">Order</span></a>
          </li>
          <li class="nav-item">
            <div class="nav-link d-flex">
              <button class="btn btn-sm bg-danger text-white"> Trailing </button>
              <div class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-bs-toggle="dropdown"> English </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-bl me-3"></i> French </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-cn me-3"></i> Chinese </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-de me-3"></i> German </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-ru me-3"></i>Russian </a>
                </div>
              </div>
              <a class="text-white" href="index.html"><i class="mdi mdi-home-circle"></i></a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>