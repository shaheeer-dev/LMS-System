@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-5">
  <!-- Main content -->
   <section class="content">

        @if(count($errors)>0)

        <div class="alert alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                <li>{{$error}}</li>

                @endforeach

            </ul>

        </div>

        @endif

        <div class="flash-message">
            @foreach (['danger'] as $msg) @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif @endforeach
        </div>

        <div class="flash-message">
            @foreach (['success'] as $msg) @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif @endforeach
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Assignment</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Assignment's</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($assignment as $details)
                  <tr>
                    <td><a class="" href="{{URL::to('')}}/assignment-question/{{$details->id}}">{{$details->title}}</a></td>

                    <td class="text-center btn-group">
                      <a class="btn btn-primary" href="{{URL::to('')}}/edit-assignment/{{$details->id}}">Edit</a>
                    </td>

                    <td>
                        <a class="btn btn-danger" href="{{URL('delete-assignment',$details->id)}}">Delete</a>
                    </td>
                    
                    
                  </tr>
                @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection