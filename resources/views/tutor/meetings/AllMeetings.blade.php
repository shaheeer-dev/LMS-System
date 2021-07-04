@extends('partials.layouts.TutorMaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
           <div class="container event-shedule my-5 pt-4">
        <div class="row">

            

            <div class="col-lg-4 meeting-tab">
                @foreach($list as $lists)
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                       <a class="nav-link" data-toggle="pill" href="#v-{{$lists->id}}" role="tab" aria-controls="v-{{$lists->id}}" aria-selected="false">
                        {{$lists->subject}}
                        <div>{{$lists->date}}</div>
                    </a>
                </div>
                @endforeach

            </div>
            <div class="col-lg-8">
                @foreach($list as $lists)
                <div class="tab-content">
                    <div class="tab-pane fade" id="v-{{$lists->id}}" role="tabpanel" aria-describedby="day-1-tab">
                        <div class="speaker-wrap">
                            <div class="text pl-md-5">
                                <span class="time">{{$lists->start_time}} - {{$lists->end_time}}</span>
                                <h2>{{$lists->topic}}</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Cras tempus facilisis nunc, vitae commodo nisi. Nunc sagittis
                                    nisl tempor mi lacinia efficitur. Proin convallis a nunc at
                                    facilisis.
                                </p>
                                <h5 class="speaker-name">
                                    --<span style="color:black;">{{$lists->name}}</span>
                                    <span class="position">( <a href="{{$lists->link}}"target="_blank">Join Meeting</a> )</span>
                                    
                                </h5>
                            </div>
                        </div>
                    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            </div><!-- /.container-fluid -->
        </section>
     
        </div>
<script type="text/javascript">
    
    $(document).ready(function(){
    $('.meeting-tab').find('.nav-pills > a:first').click(); // **
})


</script>
        <!-- /.content-wrapper -->
        @endsection