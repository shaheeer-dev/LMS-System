@extends('partials.layouts.datatablemaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Tutor Registration Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tutor Registration</li>
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
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Tutor Registration</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputFirstName" class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputLastName" class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputCnic" class="col-sm-3 col-form-label">CNIC</label>
                                    <div class="col-sm-9">
                                        <input type="tel" class="form-control" id="inputCnic" placeholder="xxxxx-xxxxxxx-x">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPhone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPhone" placeholder="03xx-xxx-xxxx">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-date-of-birth" class="col-sm-3 col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <!-- 
                  <div class="form-group row"> 
                  <label for="Qualification" class="col-sm-3 col-form-label">Qualification</label>
                  <div class="col-sm-9">
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Bachelors</option>
                    <option>Bsc</option>
                    <option>MS</option>
                    <option>Msc</option>
                    <option>MPhil</option>
                    <option>PhD</option>
                  </select>
                </div>
                </div> 
              -->
                                <div class="form-group row">
                                    <label for="input-date-of-birth" class="col-sm-3 col-form-label">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input col-sm-4" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input col-sm-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label " for="exampleRadios2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Register</button>
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
