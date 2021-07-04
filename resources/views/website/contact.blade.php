@extends('partials.layouts.HomeMasterFile')
@section('content')
<!-- Main content -->
<div id="main-content">
    <div class="content-area">
        <div class="page-title">
            <div class="main-top" style="background-image: url(assets/images/contact-us.png);">
                <span class="overlay-top-header"></span>
                <div class="content container">
                    <h1>
                        Contact Us
                    </h1>
                    <!-- <div class="wrap-breadcrumb">
							<ul class="breadcrumbs">
								<li>
									<a href="/index">
										Home
									</a>
									<span class="breadcrum-icon"> > </span>
								</li>

								<li>
									Contact Us
								</li>
							</ul>
						</div> -->
                </div>
            </div>
        </div>
        <div class="site-content no-padding">
            <main class="site-main">
                <div class="wrap-main-content">
                    <div class="bl-contact-page">
                        <div class="info-contact">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="element-icon-box layout-1 text-center">
                                            <div class="icon-box">
                                                <div class="icon-image">
                                                    <i class="ion ion-location"></i>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title">
                                                        Our Location
                                                    </h3>
                                                    <div class="description">
                                                        1-KM Defence Road, <br> University Of Lahore, Pakistan.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="element-icon-box layout-1 text-center">
                                            <div class="icon-box">
                                                <div class="icon-image">
                                                    <i class="ion ion-ios-telephone"></i>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title">
                                                        Contact us
                                                    </h3>
                                                    <div class="description">
                                                        Mobile: <a href="tell:+923248678001">(+92) 324 8678 001</a><br>
                                                        Mobile: <a href="tell:+923174432117">(+92) 317 4432 117</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="element-icon-box layout-1 text-center">
                                            <div class="icon-box">
                                                <div class="icon-image">
                                                    <i class="ion ion-paper-airplane"></i>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title">
                                                        User's Support
                                                    </h3>
                                                    <div class="description">
                                                        <a href="mailto:arsalanahmad8001@gmail.com">Arsalan Ahmad Khan</a> <br>
                                                        <a href="mailto:shaheerahmed766@gmail.com">Shaheer Ahmed</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-contact">
                            <div class="container">
                                <div class="element-heading layout-1 align-center">
                                    <h3 class="title">
                                        Leave a Message
                                    </h3>
                                    <div class="line"></div>
                                </div>
                                <div class="map-contact">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.854662055609!2d74.23847931462755!3d31.390570760681733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919013fa45cbf2d%3A0x1bc0ac54325c2560!2sUOL%20Defence%20Road%20Campus!5e0!3m2!1sen!2s!4v1624021746859!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                                <div class="contact-form">
                                    <form action="javascript:void(0)">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>
                                                    <input class="input-field" type="text" placeholder="Name">
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input class="input-field" type="text" placeholder="Email">
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>
                                                    <input class="input-field" type="text" placeholder="Subject">
                                                </label>
                                            </div>
                                            <div class="col-12">
                                                <label>
                                                    <textarea class="input-field" placeholder="Message"></textarea>
                                                </label>
                                            </div>
                                            <div class="col-12">
                                                <button>
                                                    send you message
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
