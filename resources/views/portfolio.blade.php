@extends('layout.app')
@section('main_content')
<!--page banner start-->
<div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>Portfolio</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

<!--portfolio page start-->
<section class="portfolio-sec-pg px-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center mb-50">
                    <h3><img src="img/icons/title-icon.svg" alt=""> Our Portfolio</h3>
                    <h1>Our Impressive Portfolio</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/pickup-2.png" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Order Pizza Web App</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/f-and-b-software-modules-features-and-functionalities-bottom.png" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Restaurant Management</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/attachment_89547603.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Water Company Website</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/grocery-ecommerce-website-development-Kerala-India.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Shopping project</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/blogpost.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Doctor Appointment System</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/Build-Realtime-chat-app.png" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Real Time Chat Application</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/opendi-local-listing-bwa-01.png" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Listing Website</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/jobportal-free-template.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Job Portal  Web Application</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/XII2UIITYNEZBNM4BE2GI3PIAY.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Crypto Wallets.</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/8b75d6197aa027b41cd8c96776ac5c77.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>UEX.</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="img/e480b7b7e33eaa4a13113bb7a6d9f6fd.jpg" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>Elnarti.</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{ url('contact') }}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('contact') }}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="load-btns mt-50 text-center">
                    <a href="{{ route('contact') }}" class="btn btn-default">View More Projects</a>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--portfolio page end-->

@endsection
