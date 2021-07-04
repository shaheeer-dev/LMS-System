@extends('partials.layouts.TutorMaster')
@section('content')


<div class="content-wrapper">
    <div class="text-center">
        <h3>Add Assignment</h3></div>
    <section class="content"> @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul> @foreach($errors->all() as $error)
                <li>{{$error}}</li> @endforeach </ul>
        </div> 
        <br /> 
        @endif @if(session()->get('success'))
            <div 

                class="alert alert-success"> {{ session()->get('success') }} 

            </div>
            <br />
        @endif
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Assignment</h3> </div>
                            <div class="card-body">
                                <form action="{{route('update-assignment', $edit->id)}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                    <div class="all_questions_container">
                                        <div class="question_container question_0" data-index_id="0">
                                            <!-- Competition Body - START -->
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Student Id</label>
                                                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="student_id" type="text" value="{{$edit->student_id}}">
                                                            <option>Select Id</option> @foreach ($user->friends1 as $user_1)
                                                            <option selected="selected">{{ $user_1->user1->id }}</option> @endforeach </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" name="title" class="form-control txtAns" placeholder="Assignment Title"  value="{{$edit->title}}"> </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Start Date</label>
                                                        <input type="datetime-local" name="starts_at" class="form-control" placeholder="Enter Date"  value="{{$edit->starts_at}}"> </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>End Date</label>
                                                        <input type="datetime-local" name="ends_at" class="form-control txtAns" placeholder="Enter Date"  value="{{$edit->ends_at}}"> </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Passing Marks</label>
                                                        <input type="text" name="passing_marks" class="form-control txtAns" placeholder="Enter passing marks"  value="{{$edit->passing_marks}}"> </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Total Marks</label>
                                                        <input type="text" name="total_marks" class="form-control txtAns" placeholder="Enter total marks" value="{{$edit->total_marks}}"> </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Assignment Guidelines</label>
                                                        <textarea class="form-control ckeditors" name="guidelines" id="question_0"  value="{{$edit->guidelines}}"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Select image for this assignment</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="cover_img" id="fileToUpload" value="{{$edit->cover_img}}"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class='row'>
                                                <div class="col-sm-2 mt-5">
                                                    <div class="form-group">
                                                        <button type="submit" name="submit" class="btn btn-success form-control">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Question Selection -  End -->
                                </form>
                                </div>
                                </div>
                                <!-- /.card-header -->
                            </div>
                        </div>
                    </div>
        </section>
        </div>
@endsection