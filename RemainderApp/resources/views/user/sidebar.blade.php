<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link">
      <img src="https://previews.123rf.com/images/mrshamsjaman/mrshamsjaman2009/mrshamsjaman200903428/154923576-.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Reminder App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://previews.123rf.com/images/mrshamsjaman/mrshamsjaman2009/mrshamsjaman200903428/154923576-.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/home" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php if($class=='home'){echo "menu-open";} ?>">
            <a href="/user/dashboard" class="nav-link <?php if($subclass=='home'){echo "active";} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item <?php if($class=='Task'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($subclass=='Task'){echo "active";} ?>">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Task
              </p>
            </a>
          </li>

          <li class="nav-item <?php if($class=='Eval'){echo "menu-open";} ?>">
            <a href="/user/eval" class="nav-link <?php if($subclass=='Eval'){echo "active";} ?>">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Eval
              </p>
            </a>
          </li>

          <li class="nav-item <?php if($class=='repeat'){echo "menu-open";} ?>">
            <a href="/user/repeat" class="nav-link <?php if($subclass=='repeat'){echo "active";} ?>">
            <i class="nav-icon fa fa-retweet"></i>
              <p>
                Repeat
              </p>
            </a>
          </li>

          <li class="nav-item <?php if($class=='calendar'){echo "menu-open";} ?>">
            <a href="/user/calendar" class="nav-link <?php if($subclass=='calendar'){echo "active";} ?>">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calender Reminder
              </p>
            </a>
          </li>
          
          <li class="nav-item <?php if($class=='master_data'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($class=='master_data'){echo "active";} ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="#" class="nav-link <?php if($subclass=='gruptelegram'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grup Telegram</p>
                </a>
              </li>

              
              <li class="nav-item">
                <a href="/user/profile" class="nav-link <?php if($subclass=='profile'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">Reminder App</li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>