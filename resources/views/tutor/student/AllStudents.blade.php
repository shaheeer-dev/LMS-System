@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Main content -->
<div class="content-wrapper pt-5">
    <section class="content py-5 bg-gray-200">
    <div class="container-fluid">
        <div class="col-sm-12">
            @foreach (Auth::user()->friends1->where('approved', '=', true) as $user_1)
                <div class="col-sm-3 text-center" style="padding: 5px;">
                    <div style="box-shadow: 0 0 10px 1px grey; padding: 20px;">
                        <img src="/images/avatar/{{ $user_1->user1->avatar }}" alt="Profile Picture" width="50" height="50">
                       <br />
                       <h5> {{ $user_1->user1->name }}</h5>
                       <h6> Id:{{ $user_1->user1->id }}</h6>

                        <a href="{{url('student-profile', $user_1->user1->id)}}">View User</a>
                    </div>
                </div>
            @endforeach
            @if(Auth::user()->friends1->where('approved', '=', true)->count()==0)
                <h1 class="text-center">This user does not have any student</h1>
            @endif
        </div>
    </div>

           
      
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- /.content-wrapper -->
@endsection