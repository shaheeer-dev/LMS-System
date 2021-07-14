@extends('partials.layouts.StudentMaster')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tutor Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tutor Profile</li>
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
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/images/avatar/{{ $view->avatar }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $view->name }}</h3>
             
               
                <p class="text-muted text-center">Assistant Professor</p>
                
               

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Students</b> <a class="float-right">{{$user->count()}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Courses</b> <a class="float-right">{{$course->count()}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Meetings</b> <a class="float-right">{{$meeting->count()}}</a>
                  </li>
                </ul>

                @if(Auth::user()->friends->where('sender', '!=', 'Auth::user()->id')->count()==0)
                 
                 <a href="{{url('send-request', $view->id)}}" class="btn btn-primary btn-block" id="enroll"><b>Enroll Now</b></a>

               
                
                 
                 @elseif(Auth::user()->friends->where('approved', '=', 'false')->count()==1)
                 <a href="javascript:void(0)" class="btn btn-warning btn-block" id="enroll"><b>Request Pending</b></a>
                  
                   @elseif(Auth::user()->friends->where('approved', '=', 'true')->count()==0)
                 <a href="javascript:void(0)" class="btn btn-success btn-block" id="enroll"><b>Enrolled</b></a>
                  
                @endif
                
                 
                
              </div>
              <!-- /.card-body -->
            </div>
            
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            
            <!-- /.card -->
             <div class="card card-primary " style="height: 69vh;">
                <div class="card-header">
                  <h3 class="card-title">Time Slots</h3>
                 
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
               <table class="table table-striped text-center">
                 <tr>
                   <th>Day</th>
                   <th>Time</th>
                 </tr>
                 @foreach($type as $slot)
                 <tr>
                  <td>{{$slot->day}}</td>
                  <td>{{$slot->time}}</td>
                </tr>
                @endforeach
               </table>

                </div>
                <!-- /.card-body -->
              </div>
          </div>
           <div class="col-md-4">
            
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
                  <span class="tag tag-danger">{{$courses->course_name}} {{$courses->class}} <b>|</b> </span>
                  @endforeach
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Description</strong>

                <p class="text-muted">{{$view->description}}</p>
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