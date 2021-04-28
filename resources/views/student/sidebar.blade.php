
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('student/dashboard')}}" class="brand-link">
      <img src="{{URL::to('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Pemilihan Osis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{URL::to('student/profil')}}" class="d-block">{{Auth::user()->usr_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Main Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('student/profil')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>profil</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{URL::to('student/voting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voting</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/logout')}}" method="post" class="nav-link" data-toggle="tooltip" title="logout" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
          </li>

       </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>