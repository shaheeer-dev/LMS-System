@extends('partials.layouts.TutorMaster')
@section('content')
<div class="content-wrapper pt-5">
	<div class="content">
		<div class="container-fluid">
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
			<div class=" row">
				
				<div class="col-md-4">
					<div class="card card-info" style="height:55vh">
						<div class="card-header">
							<h3 class="card-title">Add Time Slots</h3>
						</div>
						<div class="card-body">
							<!-- Color Picker -->
							<!-- /.form group -->
							<!-- Color Picker -->
							<form action="{{route('add-slots' )}}" method="POST">
								@csrf
								
								<div class="form-group">
									<label>Day</label>
									<div>
										<select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="day" type="day">
											
											<option selected="selected">Monday</option>
											<option>Tuesday</option>
											<option>Wednesday</option>
											<option>Thursday</option>
											<option>Friday</option>
											<option>Saturday</option>
											<option>Sunday</option>
											
										</select>
									</div>
									<!-- /.input group -->
								</div>
								<!-- /.form group -->
								<!-- time Picker -->
								<div class="bootstrap-timepicker">
									<div class="form-group">
										<label>Time:</label>
										<div class="input-group date" id="timepicker" data-target-input="nearest">
											<input type="timepicker" class="form-control datetimepicker-input" data-target="#timepicker" name="time" />
											<div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
												<div class="input-group-text"><i class="far fa-clock"></i></div>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
									<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-info">Save</button>
							<button type="submit" class="btn btn-default float-right">Cancel</button>
						</div>
					</form>
						</div>
				
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Your Available Time Slots
							</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table  class="table table-bordered table-striped text-center">
								<thead>
									<tr class="text-center">
										<th>Id</th>
										<th>Day</th>
										<th>Time</th>
										<th>Actions</th>
										
									</tr>
								</thead>
								<tbody>
									@foreach ($view as $show)
									<tr>
										
										<td>{{$show->id}}</td>
										<td>{{$show->day}}</td>
										<td>{{$show->time}}</td>
										
										<td>
											<div class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<i class="flaticon-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{route('delete-slot', $show->id)}}"><i class="fas fa-times text-orange-red"></i>Delete</a>
												</div>
											</div>
										</td>
										
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
			
			
		</div>
		<!-- /.row -->
	</div>
	
</div>
</div>
@endsection