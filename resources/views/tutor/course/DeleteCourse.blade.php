@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Delete Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Delete Course</li>
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
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Delete Course</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        
                                        <div class="col-md-6 col-12">
                                            <label for="inputEmail3" class="col-form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="inputCnic" class="col-sm-3 col-form-label">CNIC</label>
                                            <input type="tel" class="form-control" id="inputCnic" placeholder="xxxxx-xxxxxxx-x">
                                        </div>
                                        <div class="col-12  col-md-6">
                                            <label for="Qualification" class=" col-form-label">Select Class</label>
                                            <div>
                                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                    <option selected="selected">Please Select</option>
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
                                        <div class="col-md-6 col-12">
                                            <label for="InputCourseId" class=" col-form-label">Course Id</label>
                                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="0" data-select2-id="9">Please Select</option>
                                                <option value="1" data-select2-id="27">00524</option>
                                                <option value="2" data-select2-id="28">00525</option>
                                                <option value="3" data-select2-id="29">00526</option>
                                                <option value="3" data-select2-id="30">00527</option>
                                                <option value="3" data-select2-id="31">00528</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                                        <button type="submit" class="btn btn-secondary float-right btn-lg">Cancel</button>
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