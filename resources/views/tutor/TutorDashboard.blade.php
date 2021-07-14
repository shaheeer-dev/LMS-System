@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tutor Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tutor Dashboard</li>
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
                      <i class="flaticon-classmates" style="font-size: 40px;"></i>
                    </span>
                    <div class="info-box-content">
                      <span class="info-box-text">Student</span>
                      <span class="info-box-number">
                        {{Auth::user()->friends1->where('approved', '=', true)->count()}}
                        
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
                      <span class="info-box-number">{{Auth::user()->tutorcourse->where('user_id', '=',Auth::user()->id )->count()}}</span>
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
                      <span class="info-box-number">{{$meeting->count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-8 col-sm-12 col-12">
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
                            <?php $count = 0 ?>
                            @foreach($meeting as $meetings)

                            <?php if ( $count == 10) break;?>
                            <tr>
                              <td><a href="#l">{{$meetings->subject}}</a></td>
                              <td>{{$meetings->topic}}</td>
                              <td>{{$meetings->date}}</td>
                              <td><span class="badge badge-success">{{$meetings->start_time}}</span></td>
                              <td>
                                
                                <a href="{{$meetings->link}}" class="btn btn-sm btn-warning" target= _blank>join Meeting</a>
                              </td>
                            </tr>
                            <?php  $count++ ?>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <a href="{{url('all-meetings', Auth::user()->id)}}" class="btn btn-sm btn-secondary float-right">View All Meetings</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                  <!-- PRODUCT LIST -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Courses</h3>
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
                      <ul class="products-list product-list-in-card pl-2 pr-2">
                        <?php $count = 0 ; ?>
                        @foreach($data as $pep)
                        <?php if( $count == 10 ) break; ?>
                        <li class="item">
                          <div class="product-img">
                            <img src="/images/Course_Thumbnail/{{$pep->Thumnail}}" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">
                              <span class="badge badge-warning float-right">{{$pep->class}}</span>
                              {{$pep->course_name}}</a>
                              <span class="product-description">
                                {{$pep->Description}}.
                              </span>
                            </div>
                        </li>
                        <?php $count++; ?>
                          @endforeach
                        <!-- /.item -->
                            </ul>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer text-center">
                            <a href="http://localhost:8000/registered-courses" class="uppercase">View All Courses</a>
                          </div>
                          <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                      <!-- /.row -->
                      </div><!--/. container-fluid -->
                    </section>
                    <!-- /.content -->
                  </div>
                  <!-- /.content-wrapper -->
                  @endsection