@extends('partials.layouts.datatablemaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row pt-5">
        <div class="col-12">
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Course's Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>Id</th>
                    <th>Class</th>
                    <th>Course Name</th>
                    <th>Book Name</th>
                    <th>Course Description</th>
                    <th >Book Thumbnail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($view as $course )
                  <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->Class}}</td>
                    <td>{{$course->Course_Name}}</td>
                    <td>{{$course->Book_Name}}</td>
                    <td>{{$course->Description}}</td>
                    <td><img src="{{ asset('images/Course_Thumbnail/'.$course->Thumnail) }}" width="50"></td>
                    <td>
                      
                      <div class="">
                        <a class="btn btn-danger" href="{{route('DeleteCourse', $course->id)}}">Delete</a>
                        <a class="btn btn-info" href="{{route('EditCourse', $course->id)}}"></i>Edit</a>
                        
                      </div>
                    </div>
                  </td>
                  
                </tr>
                @endforeach
              </tbody>
              <!-- <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot> -->
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection