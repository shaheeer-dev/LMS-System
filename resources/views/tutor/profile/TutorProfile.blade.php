@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
               <li class="nav-item"><a class="nav-link float-right" href="/settings">Settings</a></li>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="/images/avatar/{{ Auth::user()->avatar }}"
                  alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                
                <h5 class="text-muted text-center">Rs.{{Auth::user()->price}}/hr</h5>
                
                
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Students</b> <a class="float-right">{{Auth::user()->friends1->where('approved', '=', true)->count() }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Courses</b> <a class="float-right">{{Auth::user()->tutorcourse->where('user_id', Auth::id())->count()}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Meetings</b> <a class="float-right">{{Auth::user()->meetings1->where('tutor_id', Auth::id())->count()}}</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            
            
            <!-- /.card -->
          </div>
          <div class="col-md-4">
            <!-- Time Slots -->
            <div class="card card-primary" style="height:63vh">
              <div class="card-header">
                <h3 class="card-title">Time Slots</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table class="table table-striped text-center">
                  <tr>
                    <th>Day</th>
                    <th>Time</th>
                  </tr>
                  @foreach($view as $slot)
                  <tr>
                    <td>{{$slot->day}}</td>
                    <td>{{$slot->time}}</td>
                  </tr>
                  @endforeach
               <!--    @if(Auth::user()->slots->where('user_id', '!=', Auth::user()->id))
                  <tr>
                  You don't have any slot 
                  
                </tr>
                @endif -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-4">
            <!-- About Me Box -->
            <div class="card card-primary" style="height:63vh">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                <p class="text-muted">
                  {{Auth::user()->education}}
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted">{{ Auth::user()->location }}</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Courses</strong>
                
                <p class="text-muted">
                  @foreach(Auth::user()->tutorcourse->where('user_id', Auth::id()) as $courses)
                  <span class="tag tag-danger">{{$courses->course_name}} ({{$courses->class}}) <b>|</b> </span>
                  @endforeach
                </p>
                
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Description</strong>
                <p class="text-muted">{{ Auth::user()->description }}.</p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection