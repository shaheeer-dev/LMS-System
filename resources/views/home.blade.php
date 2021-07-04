@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body" id="app">
                    <!-- Conversations are loaded here -->
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                    <!-- /.card-footer-->
                </div>
                
            </div>
        </div>
    </div>
    @endsection