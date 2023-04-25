@extends('layout.app')
@section('main_content')
<!--page banner start-->
<div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>Error</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Error</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div><!--/.container-->
    <span class="banner-frame-one"></span>
    <span class="banner-frame-two"></span>
    <span class="banner-frame-three"></span>
    <span class="banner-frame-four"></span>
    <div class="shape-top-left" data-aos="fade-right" data-aos-delay="500"></div>
    <div class="shape-bottom-right" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-delay="1500"></div>
</div>
<!--page banner end-->

<!--404 start-->
<div class="error-pg-sec px-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-404 text-center">
                    <img src="img/404.png" alt="">
                    <div class="mt-50">
                        <h2>Oops! Page Not Found.</h2>
                        <p>The page you are looking for is not available or has been moved. Try a
                            different page or go to homepage with the button below.</p>
                        <a href="{{ url('/') }}" class="btn btn-default">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--404 end-->
@endsection
