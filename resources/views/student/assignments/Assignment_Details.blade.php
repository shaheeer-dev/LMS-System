@extends('partials.layouts.StudentMaster')
@section('content')
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
                            <div class="card-header  bg-info text-center">
                                <h3 class="card-title">Assignment Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table border="0" cellpadding="0" cellspacing="0" class="table">
                                    <tbody>
                                        @foreach($assignment as $view)
                                        <tr >
                                        <td> 
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a target="_blank" href="#">
                                                    <img class="" src="/images/assignment_images/{{$view->cover_img}} ">
                                                    {{$view->cover_img}}</a>
                                                </div>
                                                <div class=""><b>Upload Time: {{$view->starts_at}}</b></div>
                                            </div>
                                        </td>
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="submissionstatustable">
                                <h3>Submission status</h3>
                                <div class="box py-3 boxaligncenter submissionsummarytable">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                             @foreach($assignment as $view)
                                            <tr class="">
                                                <th  class="cell c0" style="" scope="row">Guidelines</th>
                                                <td>{{$view->guidelines}}</td>
                                            </tr>
                                            <tr class="">
                                                <th  class="cell c0" style="" scope="row">Due Date</th>
                                                <td >{{$view->ends_at}}</td>
                                            </tr>
                                            <tr>
                                                <th  class="cell c0" style="" scope="row">Passing Marks</th>
                                                <td >{{$view->passing_marks}}</td>
                                            </tr>
                                            <tr class="">
                                                <th  class="cell c0" style="" scope="row">Passing Marks</th>
                                                <td >{{$view->total_marks}}</td>
                                            </tr>

                                            <tr>
                                                <th>Submit your assignment (only pdf)</th>
                                                <td>
                                                    
                                                    <form action="#" method="POST" enctype="multipart/form-data"> 
                                                        @csrf
                                                        
                                                           <div class="form-group">
                                                        <label for="exampleInputFile">Select file for this assignment</label>
                                                        <div class="input-group">
                                                            <div class="col-md-8 col-12 col-sm-6">
                                                                <input type="file" name="cover_img" id="fileToUpload" >

                                                            </div>

                                                            <div class="col-md-4 col-12 col-sm-6">
                                                                 <button type="submit" name="submit" class="btn btn-success form-control">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <!-- Sent Course Id End -->
                                          
                                                    </form>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection