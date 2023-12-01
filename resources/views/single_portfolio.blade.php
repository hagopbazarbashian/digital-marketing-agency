@extends('layout.app') @section('main_content')
 <!--page banner start-->
 <div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>Portfolio Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio Details</li>
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
 <!--portfolio details page start-->
 <section class="portfolio-details-pg px-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="port-details-inner">
                    <div class="port-banner-img">
                        <img src="{{asset('portfolio/' . $portfolios_single->image)}}" alt="">
                    </div>
                    <div class="port-info-client">
                        <div class="row gy-5">
                            <div class="col-md-6 col-lg-4">
                               <p><strong>Start Date:</strong> <span>{{ date('d M Y', strtotime($portfolios_single->startdate)) }}</span></p>
                               <p><strong>End Date:</strong> <span>{{ date('d M Y', strtotime($portfolios_single->enddate)) }}</span></p>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <p><strong>client:</strong> <span>{{ $portfolios_single->client }}</span></p>
                                <p><strong>Tags:</strong> <span>{{ $portfolios_single->title }} </span></p>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <p><strong>Website:</strong> <a href="{{ $portfolios_single->link }}" target="_blank">{{ $portfolios_single->link }}</a></p>
                                <p><strong>Category:</strong> <span>{{$portfolios_single->category}}</span></p>
                            </div>
                        </div>
                    </div><!--/.port-info-client-->
                    <div class="port-information mt-50">
                        <div class="row g-4">
                            {{-- <div class="col-12 mb-50">
                                <h2>Human Figurines Using Ladder to Reach Cracked lit Lightbulb as an Idea</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look as even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the as Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over Latin words need to as be sure there isn't anything as embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>
                            </div> --}}
                            {{-- <div class="col-md-6">
                                <ul class="list-icons d-flex flex-wrap align-items-start">
                                    <li>Research beyond the business plan</li>
                                    <li>Customer Oriented Program Daily</li>
                                    <li>The ability to turnaround consulting</li>
                                    <li>Customer engagement matters</li>
                                    <li>Financial Growth System</li>
                                    <li>Financial Growth System</li>
                                    <li>Dedicated Team member</li>
                                    <li>Product ux Design & Development</li>
                                </ul>
                                <div class="row g-3 mt-50">
                                    <div class="col-6">
                                        <img src="img/portfolio-details2.jpg" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/portfolio-details3.jpg" alt="">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="service-widget-right portfolio ">
                                    <h2>Need Your Help?</h2>
                                    <ul class="d-flex flex-wrap align-items-start">
                                        <li>
                                            <span><i class="bx bxs-phone"></i></span>
                                            <a href="tel:+37555446061">+(374) 55-446061</a>
                                        </li>
                                        <li>
                                            <span><i class="bx bxs-envelope"></i></span>
                                            <a href="mailto:support@developsmart.xyz">support@developsmart.xyz</a>
                                        </li>
                                    </ul>
                                </div><!--/.portfolio-->
                                {{-- <div class="extra-txt mt-50">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do look as even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                                    <p>Hidden in the middle of text. All the as Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Inte rnet. It uses a dictionary of over Latin words need to as be sure.</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div><!--/.port-details-inner-->
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--portfolio details page end-->

@endsection
