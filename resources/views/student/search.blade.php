@extends('partials.layouts.StudentMaster')
@section('content')


    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Tutor Search</h2>
            <form action="{{ route('searching') }}" method="GET">
<h3>Advanced Search</h3><br>
<input type="text" name="course_name" class="form-control" placeholder="Course Name"><br>
<input type="text" name="class" class="form-control" placeholder="Class"><br>
<input type="hidden" name="usertype" class="form-control" placeholder="Class" value="2"><br>
<input type="submit" value="Search" class="btn btn-secondary" id="btn-search">
</form>

<div id="tutor-list">
<h3></h3>
<table class="table table-striped ">
<tr>
<th>Tutor Name</th>
<th>Avatar</th>
<th>Course </th>
<th>Class</th>
<th>profile</th>
</tr>
@forelse($data as $pep)
<tr>
<td>{{ $pep->name }}</td>
<td><div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                       src="/images/avatar/{{ $pep->avatar }}"
                       alt="User profile picture">
    </div>
</td>
<td>{{$pep->course_name}}</td>
<td>{{$pep->class}}</td>
<td><a href="{{ url('tutor-profile' , $pep->id) }}">

    Profile
</a></td>
	

</tr>
	@empty
	    <p style="font-size:18px; color: red;"> No Record Found </p>
@endforelse
</table>


{{ $data->appends(request()->except('page'))->links() }}
</div>
        </div>
    </section>
  </div>

@endsection