@extends('partials.layouts.TutorMaster')
@section('content')
<div class="content-wrapper pt-5">
	<div class="content">
		<div class="container-fluid">
			
			<h3>Instructions:</h3>
			<span>1. Before scheduling the meeting you have to create an account on Zoom for the first time if you don't have.</span><br>
			<span>2. After signup you have to schedule the meetings.</span><br>
			<span>3. you have to submit the following <b>Class, Subject, Meeting topic,<br>     Meeting time and date, Meeting link</b>with the students by filling below fields. </span><br>
			<span>4. Login with Zoom by <a href="https://zoom.us/signin">Click here</a></span>
			<div class="row pt-5">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div><br>
				@endif
				@if (session()->get('success'))
				<div class="alert alert-success">
					{{ session()->get('success')}}
				</div><br>
				@endif
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">Create Meetings</h3>
					</div>
					<div class="card-body">
						<!-- Color Picker -->
						<!-- /.form group -->
						<!-- Color Picker -->
						
						<form action="{{route('create-meetings')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
								
								<div class="col-md-3">
									<div class="form-group">
										<label>Subject</label>
										<div>
											<input type="text" class="form-control " name="subject" placeholder="Database" />
										</div>
										<!-- /.input group -->
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Student</label>
										<select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="student_id" type="text">
											<option>Select Id</option> @foreach ($user->friends1 as $user_1)
											<option>{{ $user_1->user1->id }}</option> @endforeach </select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Topic</label>
											<div>
												<input type="text" class="form-control " name="topic" placeholder="We will learn about joins" />
											</div>
											<!-- /.input group -->
										</div>
									</div>
									<!-- /.form group -->
									<!-- time Picker -->
									<div class="bootstrap-timepicker">
										<div class="form-group">
											<label>Start Time</label>
											<div class="input-group date" id="timepicker" data-target-input="nearest">
												<input type="timepicker" class="form-control datetimepicker-input" data-target="#timepicker" name="start_time" />
												<div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="far fa-clock"></i></div>
												</div>
											</div>
											
										</div>
										
									</div>
									<!-- time Picker -->
									<div class="bootstrap-timepicker">
										<div class="form-group">
											<label>End Time</label>
											<div class="input-group date" id="timepicker1" data-target-input="nearest">
												<input type="timepicker" class="form-control datetimepicker-input" data-target="#timepicker" name="end_time" />
												<div class="input-group-append" data-target="#timepicker1" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="far fa-clock"></i></div>
												</div>
											</div>
											
										</div>
										
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Start Date</label>
											<div>
												<input type="date" class="form-control " name="date" />
											</div>
											<!-- /.input group -->
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label>Meeting Link</label>
											<div>
												<input type="text" class="form-control" name="link" placeholder="https//xxxxxx" />
											</div>
											<!-- /.input group -->
										</div>
									</div>
								</div>
							</div>
							
							
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-info">Save</button>
								<button type="submit" class="btn btn-default float-right">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<!-- /.row -->
		</div>
		
	</div>
</div>
@endsection