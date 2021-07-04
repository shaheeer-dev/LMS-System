@extends('partials.layouts.StudentMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.col -->
      <div class="row">
        <div class="col-md-8" id="messages">
          <!-- DIRECT CHAT SUCCESS -->
       
          <!-- /.col -->
        </div>
        <div class="col-md-4">
          <div class="card card-success card-outline direct-chat direct-chat-success">
            <div class="card-header">
              <h3 class="card-title">Your Tutors</h3>
              <!-- /.card-header -->
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <div class="user-wrapper">
                <ul class="users">
                  @foreach(Auth::user()->friends->where('approved', '=', true) as $user)
                  <li class="user" id="{{ $user->user2->id }}">
                  <!-- will show unread count notification -->
                   @if($user->unread)
                      <span class="pending">{{ $user->unread }}</span>
                    @endif

                    
                    <div class="media">
                      <div class="media-left">
                        <img src="/images/avatar/{{ $user->user2->avatar }}" alt="" class="media-object">
                      </div>
                      <div class="media-body">
                        <p class="name">{{ $user->user2->name }}</p>
                        <p class="email">{{ $user->user2->email }}</p>
                      </div>
                    </div>
                  </li>
                  @endforeach

                  @if(Auth::user()->friends->where('approved', '=', true)->count()==0)
                    <h5 class="text-center pt-5">Please enroll tutor before chat</h5>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
</div>
@endsection