@extends('layout.app')
@section('main_content')

<!--page banner start-->
<div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>Pricing</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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

<!--pricing plan start-->
<section class="pricing-plan-sec px-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="sec-title text-center mb-50">
                    <h3><img src="img/icons/title-icon-infinity.svg" alt=""> Our Pricing</h3>
                    <h1>Our Best Pricing Plan</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="single-plan-area" data-aos="fade-up" data-aos-delay="100">
                            <div class="icons">
                                <img src="img/icons/plan1.svg" alt="">
                            </div>
                            <div class="plan-hdr">
                                <h2>Basic Plan</h2>
                                {{-- <h1><sup>$</sup>30<small>Per Month</small></h1> --}}
                                <h1>Free</h1>
                            </div>
                            <div class="plan-body">
                                <ul class="list-icons d-flex flex-column align-items-center">
                                    <li>Free Consultations</li>
                                    <li>Business Planning</li>
                                    <li>Investment Process</li>
                                    <li class="dis">Market Research</li>
                                    <li class="dis">Online Support</li>
                                    <li class="dis">Unlimited Updates</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn">Choose Plan</a>
                            </div>
                        </div><!--/.single-plan-area-->
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="single-plan-area features" data-aos="fade-up" data-aos-delay="300">
                            <div class="icons">
                                <img src="img/icons/plan2.svg" alt="">
                            </div>
                            <div class="plan-hdr">
                                <h2>Gold Plan</h2>
                                <h1><sup>$</sup>30<small>Per Month</small></h1>
                            </div>
                            <div class="plan-body">
                                <ul class="list-icons d-flex flex-column align-items-center">
                                    <li>Free Consultations</li>
                                    <li>Business Planning</li>
                                    <li>Investment Process</li>
                                    <li class="dis">Market Research</li>
                                    <li class="dis">Online Support</li>
                                    <li>Unlimited Updates</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn">Choose Plan</a>
                            </div>
                        </div><!--/.single-plan-area-->
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="single-plan-area" data-aos="fade-up" data-aos-delay="500">
                            <div class="icons">
                                <img src="img/icons/plan3.svg" alt="">
                            </div>
                            <div class="plan-hdr">
                                <h2>Silver Plan</h2>
                                <h1><sup>$</sup>60<small>Per Month</small></h1>
                            </div>
                            <div class="plan-body">
                                <ul class="list-icons d-flex flex-column align-items-center">
                                    <li>Free Consultations</li>
                                    <li>Business Planning</li>
                                    <li>Investment Process</li>
                                    <li>Market Research</li>
                                    <li>Online Support</li>
                                    <li>Unlimited Updates</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn">Choose Plan</a>
                            </div>
                        </div><!--/.single-plan-area-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--pricing plan end-->



<!--service support start-->
<section class="service-support-sec px-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-content-support text-center">
                    <div class="sec-title text-center">
                        <h3 class="text-white"><img src="img/icons/title-icon.svg" alt=""> Let's Support</h3>
                        <h1 class="text-white">You need our support to have any projects?</h1>
                    </div>
                    <p>Enthusiastically architect corporate metrics via enterprise methodologies. Progressively extend distinctive process improvements rather than parallel channels.</p>
                    <div class="btn-groups mt-50">
                        <a href="#" class="btn btn-default">Set Free Quotes</a>
                        <a href="{{ url('contact') }}" class="btn btn-transparent">Contact For Us</a>
                    </div>
                </div><!--/.inner-content-support-->
            </div>
        </div>
    </div><!--/.container-->
    <div class="shape-bottom-left " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="1000"></div>
    <div class="shape-top-left" data-aos="fade-down" data-aos-delay="500"></div>
    <img src="img/support-shape-left.svg" data-aos="fade-right" class="shape-left" alt="">
    <img src="img/support-shape-right.svg" class="shape-right" data-aos="fade-left" alt="">
</section>
<!--service support end-->

<!--partner area start-->
<div class="partner-area-wrap px-120">
    <div class="container">
        <div class="col-12">
            <div class="partner-logo-slider">
                <div class="single">
                    <div class="logo-sl-inner">
                        <img src="img/partner/partner1.png" alt="">
                    </div><!--/.logo-sl-inner-->
                </div>
                <div class="single">
                    <div class="logo-sl-inner">
                        <img src="img/partner/partner2.png" alt="">
                    </div><!--/.logo-sl-inner-->
                </div>
                <div class="single">
                    <div class="logo-sl-inner">
                        <img src="img/partner/partner3.png" alt="">
                    </div><!--/.logo-sl-inner-->
                </div>
                <div class="single">
                    <div class="logo-sl-inner">
                        <img src="img/partner/partner4.png" alt="">
                    </div><!--/.logo-sl-inner-->
                </div>
                <div class="single">
                    <div class="logo-sl-inner">
                        <img src="img/partner/partner5.png" alt="">
                    </div><!--/.logo-sl-inner-->
                </div>
            </div><!--/.partner-logo-slider-->
        </div>
    </div><!--/.container-->
</div>
<!--partner area end-->

@endsection
