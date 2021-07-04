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
                <h3 class="card-title">Actions On Tutor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr class="text-center">
                    <th>Tutor id</th>
                    <th>Tutor Name</th>
                    <th>Avatar</th>
                    <th>Email</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach( $tutor as $tutors)
                  <tr>
                    <td>{{$tutors->id}}</td>
                    <td>{{$tutors->name}}</td>
                    <td><img src="/images/avatar/{{$tutors->avatar}}" style="width:32px; height:32px; border-radius:50%"></td>
                    <td>{{$tutors->email}}</td>
                    <td  class="text-center"> <span >
                      <span> <button type="button" class="btn btn-danger pr-3">Delete</button></span>
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