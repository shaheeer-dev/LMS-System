@extends('partials.layouts.HomeMasterFile')
@section('content')
<!-- Main content -->
<div id="main-content">
    <div class="content-area">
        <div class="site-content">
            <main class="site-main">
                <div class="wrap-main-content">
                    <div class="bl-404-page">
                        <div class="container text-center">
                            <div class="image-404">
                                <img src="assets/images/404-image.jpg" alt="IMG">
                            </div>
                            <div class="text-404">
                                <h3 class="title">
                                    Page not found
                                </h3>
                                <div class="description">
                                    Sorry, we couldn't find the content you were looking for.
                                </div>
                            </div>
                            <div class="element-button layout-1">
                                <a href="/index" class="button">
                                    Back To Home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<!-- end Main content -->
@endsection
