 @extends('partials.layouts.StudentMaster')
 @section('content')
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
 <div class="tab-pane p-5" id="settings" >
                    <form class="form-horizontal" action="{{route('student-profile')}}" enctype="multipart/form-data" method="POST">
                      @csrf
                        <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Profile Picture</label>
                        <div class="col-sm-10">
                          <input type="file"  id="inputName2" name="avatar">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Education" name="education">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Lahore, Pakistan" name="location">
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label" name="notes">Description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Description" name="description"></textarea>
                        </div>
                      </div>
     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </section>
            </div>
@endsection