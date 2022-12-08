<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="mt-3 pb-3 mb-3 d-flex">
  </div>

  <!-- Sidebar Menu -->
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
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{url('layout.main')}}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('layout.dashboard')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a href="{{url('layout.data')}}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Tables
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('layout.data')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>DataTables</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-header">Menu</li>
      <li class="nav-item">
        <a href="{{url('layout.calendar')}}" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            Calendar
            <span class="badge badge-info right">2</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Mailbox
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../mailbox/mailbox.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inbox</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../mailbox/compose.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Compose</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../mailbox/read-mail.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Read</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>