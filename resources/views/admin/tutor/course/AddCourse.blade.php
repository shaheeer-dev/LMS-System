@extends('partials.layouts.datatablemaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Course</li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                        @endif
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">New Course</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{route('SubmitCourse')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12  col-md-4">
                                            <label for="Qualification" class=" col-form-label">Class</label>
                                            <div>
                                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="Class" type="Class">
                                                    <option selected="selected" >Select Class</option>
                                                    <option>6th</option>
                                                    <option>7th</option>
                                                    <option>8th</option>
                                                    <option>9th</option>
                                                    <option>10th</option>
                                                    <option>11th</option>
                                                    <option>12th</option>
                                                    <option>O-Levels</option>
                                                    <option>A-Levels</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="InputCourseName" class="col-form-label">Course Name</label>
                                            
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Course Name" name="Course_Name" type="Course_Name">
                                            
                                        </div>
                                        
                                        
                                        <div class="col-md-4 col-12">
                                            <label for="InputBookName" class=" col-form-label">Book Name</label>
                                            <input type="text" class="form-control" id="#" placeholder="Book Name" name="Book_Name" type="Book_Name">
                                        </div>
                                        
                                        <div class="col-md-4 col-12">
                                            <label for="InputCourseDescription" class="col-form-label">Course Description</label>
                                            
                                            <input type="text" class="form-control" id="#" placeholder="Course Description" name="Description" type="Description">
                                            
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <label for="inputCourseLevel" class="col-form-label">Book Thumbnail</label>
                                            <div>
                                                <input type="file"  name="Thumnail" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit"  class="btn btn-info">Save</button>
                                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        
        @endsection