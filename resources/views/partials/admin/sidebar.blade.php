<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/logo-tutor-online.png" alt="TutorOnline Logo" class="brand-image " style="opacity: 1">
    <span class="brand-text font-weight-light">Tutor Online</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
        <li class="nav-item menu-open">
          <li class="nav-item">
            <a href="http://localhost:8000/addashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Tutors Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/tutorsection" class="nav-link">
                  <!-- <i class="far fa-registered"></i> -->
                  <i class="fas fa-angle-right"></i>
                  <p>Tutor Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/ActionOnTutor" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>
                    Actions On Tutor
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-book-open"></i>
              <p>
                Course Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/AddCourse" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>Add Course</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="http://localhost:8000/ViewAllCourse" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>
                    Course's Details
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('ViewAllStudents')}}" class="nav-link">
                  <i class="fas fa-angle-right"></i>
                  <p>All Students</p>
                </a>
              </li>
            </ul>
          </li>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>