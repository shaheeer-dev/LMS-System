  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost:8000/student-dashboard" class="brand-link">
            <img src="http://localhost:8000/dist/img/logo-tutor-online.png" alt="TutorOnline Logo" class="brand-image" style="opacity: 1">
      <span class="brand-text font-weight-light">Tutor Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/avatar/{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt "></i>
              <p>
                Student Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Courses
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/offer-course" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Offer Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost:8000/enrolled-courses" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enrolled Courses</p>
                </a>
              </li>
             
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tutor
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost:8000/searching" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Tutor</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('enrolled-show', Auth::user()->id)}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Tutors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="all-meetings" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tutor Details</p>
                </a>
              </li>
            
            </ul>

          </li>
                    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Your Meetings
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{url('your-meetings', Auth::user()->id)}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Meetings</p>
                </a>
              </li>
            
            </ul>

          </li>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Assignments
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview"> 
              <li class="nav-item">
                <a href="{{url('your-assignment', Auth::user()->id)}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Assignments</p>
                </a>
              </li>
            
            </ul>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>