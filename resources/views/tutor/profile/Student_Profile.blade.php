@extends('partials.layouts.TutorMaster')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/images/avatar/{{ $view->avatar }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $view->name }}</h3>
             
               
                <p class="text-muted text-center">{{$view->education}}</p>
                
               

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Tutors</b> <a class="float-right">{{$view->friends->where('approved', '=', true)->count() }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Courses</b> <a class="float-right">{{$course->count()}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Meetings</b> <a class="float-right">{{$meeting->count()}}</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
             
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  {{$view->education}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{$view->location}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Courses</strong>

                <p class="text-muted">
                   @foreach($course as $courses)
                  <span class="tag tag-danger">{{$courses->course_name}} ({{$courses->class}}) <b>|</b> </span>
                  @endforeach
           
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Description</strong>

                <p class="text-muted">{{$view->description}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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