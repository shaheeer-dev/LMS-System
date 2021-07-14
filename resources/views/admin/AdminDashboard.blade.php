
@extends('partials.layouts.datatablemaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
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
              	<i class="flaticon-classmates"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text">Student</span>
                <span class="info-box-number">
                  {{Auth::user()->where('usertype', '3')->count()}}
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tutors</span>
                <span class="info-box-number">{{Auth::user()->where('usertype', '2')->count()}}</span>
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
                <span class="info-box-number">{{$course->count()}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">All Members</span>
              
                <span class="info-box-number">{{Auth::user()->count()}}</span>

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- Main row -->
        <div class="row">
            <!-- TABLE: New Members -->
            <div class="col-md-8">
                          <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">New Members</h3>

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
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>User Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 0 ; ?>
                      @foreach( $users as $user)
                      @if($user->usertype !=1)
                      <?php if( $count == 10 ) break; ?>
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{$user->email}}</div>
                      </td>
                 
                      @if($user->usertype ==2)
                      <td><span class="badge badge-info">Tutor</span></td>
                      @endif
                      @if($user->usertype ==3)
                      <td><span class="badge badge-warning">Student</span></td>
                      @endif
                    </tr>
                    <?php $count++; ?>
                    @endif
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="http://localhost:8000/ViewAllStudents" class="btn btn-sm btn-info float-left">View All Students</a>
                <a href="http://localhost:8000/ActionOnTutor" class="btn btn-sm btn-secondary float-right">View All Tutors</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>

          
          <!-- /.col -->

          <div class="col-md-4">
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
                  @foreach($course as $courses)
                  <?php if( $count == 10 ) break; ?>
                  <li class="item">
                    <div class="product-img">
                      <img src="/images/Course_Thumbnail/{{$courses->Thumnail}}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{$courses->Course_Name}}
                        <span class="badge badge-warning float-right">{{$courses->Class}}</span></a>
                      
                      <span class="product-description">
                        {{$courses->Description}}
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
                <a href="http://localhost:8000/ViewAllCourse" class="uppercase">View All Courses</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection