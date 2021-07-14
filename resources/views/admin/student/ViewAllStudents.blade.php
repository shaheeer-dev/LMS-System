@extends('partials.layouts.datatablemaster')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All students</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr class="text-center">
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th colspan="2">Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($student as $students)
                  <tr>
                    <td>{{$students->id}}</td>
                    <td>{{$students->name}}</td>
                    <td><img src="/images/avatar/{{$students->avatar}}" style="width:32px; height:32px; border-radius:50%"></td>
                    <td>{{$students->email}}</td>
                    <td colspan="2" class="text-center">
                      <span> <a type="submit" href="{{route('delete-student', $students->id)}}" class="btn btn-danger pr-3">Delete</a></span></span>
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