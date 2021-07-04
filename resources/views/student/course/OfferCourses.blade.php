@extends('partials.layouts.StudentMaster') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Course</h1> </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row ">

                <!-- left column -->
                   @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                <!-- @if(session()->get('success'))
                <div class="alert alert-success">
                    <li>{{session()->get('success')}}</li>
                </div> 
                @endif  -->
                @foreach($view as $view)
                <!--/.col (center) -->
                <div class="col-md-4">
                    <form action="{{route('enroll-course', $view->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <input type="text" class="form-control" name="course_name" value="{{$view->Course_Name}}" hidden="hidden">
                          <input type="text" class="form-control" name="class" value="{{$view->Class}}" hidden="hidden">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header text-white" style="background: url('{{ asset('images/Course_Thumbnail/'.$view->Thumnail) }}') center center; box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 55%);">
                            <div class="dropdown d-flex justify-content-end">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="flaticon-more text-white "></i> </a>
                                <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a> <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a> <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a> </div>
                                
                            </div>
                            <h5 class="widget-user-desc" id="add_course_desc" >{{$view->Course_Name}}</h5> </div>

                        <div class="card-footer" id="add_course_footer">
                            <div class="row ">
                                <div class="col-sm-4 col-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header" name="class" value="{{$view->Class}}">{{$view->Class}}</h5> <span class="description-text">Class</span> </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">40</h5> <span class="description-text">Tutor</span> </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 col-4">
                                    <div class="description-block">
                                        <h5 class="description-header">{{$std->count()}}</h5> <span class="description-text">Student</span> </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="card-body ">
                            <div class="row d-flex justify-content-center">
                                <p class="card-text text-center">{{$view->Description}}</p>
                            </div>                 
                          
                            
                         
                            <div class="row d-flex justify-content-center pt-5">
                                <button type="submit" class="btn btn-success toastrDefaultSuccess" > Register</button>
                            </div>
                           
                        </div>
                    </div>
                    </form>
                    <!-- /.widget-user -->
                </div> @endforeach </div>

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<!-- /.content-wrapper -->@endsection