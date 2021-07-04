@extends('partials.layouts.StudentMaster')
@section('content')
<!-- Main content -->
<div class="content-wrapper pt-5">
    <section class="content py-5 bg-gray-200">
        <div class="container-fluid">
            <div class="col-sm-12">
                
                @foreach (Auth::user()->friends->where('approved', '=', true) as $user_1)
                <div class="element-list-courses layout-1">
                    <div class="row">
                        <div class="custom-col col-sm-6 col-xl-3 wrapper-item-course">
                            <div class="item-course">
                                <div class="pic">
                                    <img src="/images/avatar/{{ $user_1->user2->avatar }}" alt="IMG">
                                    <div class="price">
                                        Popular
                                    </div>
                                </div>
                                <div class="text">
                                    <div class="teacher">
                                        <div class="ava">
                                            <img alt="IMG" src="/images/avatar/{{ $user_1->user2->avatar }}">
                                        </div>
                                        <a href="courses.html"> {{ $user_1->user2->name }}</a>
                                    </div>
                                    <h3 class="title-course">
                                    <a href="single-courses.html">
                                        
                                    </a>
                                    </h3>
                                    <div class="info-course">
                                        <span>
                                            <i class="ion ion-document"></i>
                                            12 Courses
                                        </span>
                                        <span class="star">
                                            <i class="ion ion-android-star"></i>
                                            4.5
                                        </span>
                                        <span>
                                            <a href="{{route('tutor-profile', $user_1->user2->id)}}">View Profile</a>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @if(Auth::user()->friends->where('approved', '=', true)->count()==0)
                 <h1 class="text-center">This user does not have any tutor</h1>
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