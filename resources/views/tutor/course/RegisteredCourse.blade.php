@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-5">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Your Courses</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr class="text-center">
                    <th>Id</th>
                    <th>Subject</th>
                    <th>Class</th>
                    <th>Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($view as $show)
                  <tr>
                    <td>{{$show->id}}</td>
                    <td>{{$show->course_name}}</td>
                    <td>{{$show->class}}
                    </td>
                    <td>
                      <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <i class="flaticon-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="{{route('delete-course', $show->id)}}"  data-toggle="modal" data-target="#modal-danger"><i class="fas fa-times text-orange-red"></i>Delete</a>
                        </div>
                      </div>
                    </td>
                    
                  </tr>
                  <div class="modal fade" id="modal-danger">
                    <div class="modal-dialog">
                      <div class="modal-content bg-danger">
                        <div class="modal-header">
                          <h4 class="modal-title">Delete Course</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Do you want to delete</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                          <a type="button" class="btn btn-outline-light" href="{{route('delete-course', $show->id)}}">Yes</a>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
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
<!-- /.modal -->
<!-- /.content-wrapper -->
@endsection