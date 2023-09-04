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
    @if ($portfolios_show)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center mb-50">
                    <h3><img src="img/icons/title-icon.svg" alt=""> Our Portfolio</h3>
                    <h1>Our Impressive Portfolio</h1>
                </div>
            </div>
            @foreach ($portfolios as $portfolio)
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-inner-sl">
                            <div class="imgs">
                                <img src="{{asset('portfolio/'.$portfolio->image)}}" alt="">
                            </div>
                            <div class="hidden-cont">
                                <div class="d-flex justify-content-between">
                                    <div class="name">
                                        <h3>{{$portfolio->title}}</h3>
                                        {{-- <p>Print, Books</p> --}}
                                    </div>
                                    <div class="btns">
                                        <a href="{{$portfolio->link}}" class="btn"><i class='bx bx-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{$portfolio->link}}" class="go-hidden"><i class='bx bx-plus'></i></a>
                        </div><!--/.portfolio-inner-sl-->
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12">
                <div class="load-btns mt-50 text-center">
                    <a href="{{ route('contact') }}" class="btn btn-default">View More Projects</a>
                </div>
            </div>
        </div>
    </div><!--/.container-->
    @endif
</section>
<!--portfolio page end-->
@endsection
