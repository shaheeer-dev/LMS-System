@extends('partials.layouts.StudentMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Student Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Dashboard</li>
            </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <!-- Info boxes -->
              <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1">
                      <i class="fas fa-chalkboard-teacher"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Tutor</span>
                      <span class="info-box-number">
                        {{Auth::user()->friends->where('approved', '=', true)->count()}}
                        
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-tasks"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Assignments</span>
                      <span class="info-box-number">{{$assignment->count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1">
                      <i class="fas fa-graduation-cap"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Courses</span>
                      <span class="info-box-number">{{Auth::user()->studentcourse->where('user_id', '=',Auth::user()->id )->count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-desktop"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Meetings</span>
                      <span class="info-box-number">
                        {{$meeting->count()}}
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                
                
                <div class="col-md-4">
                  <!-- USERS LIST -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tutors</h3>
                      <div class="card-tools">
                        <span class="badge badge-danger">{{Auth::user()->friends->where('approved', '=', true)->count()}} Members</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="users-list clearfix">
                        @foreach(Auth::user()->friends->where('approved', '=', true) as $tutor)
                        <li>
                          <img src="/images/avatar/{{$tutor->user2->avatar}}" alt="User Image">
                          <a class="users-list-name" href="{{url('tutor-profile', $tutor->user2->id)}}">{{$tutor->user2->name}}</a>
                          <span class="users-list-date"></span>
                        </li>
                        @endforeach
                      </ul>
                      <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <a href="javascript:">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!--/.card -->
                </div>
                
                <div class="col-md-8">
                  <!-- TABLE: All Meetings -->
                  <div class="card">
                    <div class="card-header border-transparent">
                      <h3 class="card-title">Latest Meetings</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0 text-center">
                          <thead>
                            <tr>
                              <th>Subject</th>
                              <th>Topic</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Join Meeting</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($meeting as $meetings)
                            <tr>
                              <td><a href="#l">{{$meetings->subject}}</a></td>
                              <td>{{$meetings->topic}}</td>
                              <td>{{$meetings->date}}</td>
                              <td><span class="badge badge-success">{{$meetings->start_time}}</span></td>
                              <td>
                                
                                <a href="{{$meetings->link}}" class="btn btn-sm btn-warning" target= _blank>join Meeting</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <a href="http://localhost:8000/your-meetings/3" class="btn btn-sm btn-secondary float-right">View All Meetings</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                </div>
                
                <!-- /.card -->
              </div>
              <!-- /.col -->
              
              <!-- /.col -->
            </div>
            <!-- /.row -->
            </div><!--/. container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @endsection