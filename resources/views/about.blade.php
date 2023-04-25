@extends('layout.app')
@section('main_content')
  <!--page banner start-->
  <div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

<!--our services start-->
<div class="our-services-sec px-120">
    <div class="container">
        <div class="row g-4 gy-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-services-dv" data-aos="fade-up" data-aos-delay="200">
                    <div class="imgs">
                        <div class="icon">
                            <img src="{{ asset('img/icons/service-icon1.svg') }}" alt="">
                        </div>
                        <img src="img/service115.png" class="mn" alt="">
                    </div>
                    <div class="cont">
                        <h2>WEB DESIGN</h2>
                        {{-- <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p> --}}
                    </div>
                </div><!--/.single-services-dv-->
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-services-dv" data-aos="fade-up" data-aos-delay="400">
                    <div class="imgs">
                        <div class="icon">
                            <img src="{{ asset('img/icons/service-icon2.svg') }}" alt="">
                        </div>
                        <img src="img/service216.png" class="mn" alt="">
                    </div>
                    <div class="cont">
                        <h2>Web Developer</h2>
                        {{-- <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p> --}}
                    </div>
                </div><!--/.single-services-dv-->
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-services-dv" data-aos="fade-up" data-aos-delay="600">
                    <div class="imgs">
                        <div class="icon">
                            <img src="{{ asset('img/icons/service-icon3.svg') }}" alt="">
                        </div>
                        <img src="img/service317.png" class="mn" alt="">
                    </div>
                    <div class="cont">
                        <h2>Text Corrector </h2>
                        {{-- <p>A text corrector is a tool that helps identify and correct errors in written text, such as spelling mistakes, grammar errors, and punctuation errors.</p> --}}
                    </div>
                </div><!--/.single-services-dv-->
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="single-services-dv" data-aos="fade-up" data-aos-delay="800">
                    <div class="imgs">
                        <div class="icon">
                            <img src="{{ asset('img/icons/service-icon4.svg') }}" alt="">
                        </div>
                        <img src="img/service418.png" class="mn" alt="">
                    </div>
                    <div class="cont">
                        <h2>Mobile App</h2>
                        {{-- <p>Contrary to popular belief, Lorem Ips is not simply random text. It has root in a piece of classical.</p> --}}
                    </div>
                </div><!--/.single-services-dv-->
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--our services end-->

<!--about ortency start-->
<section class="about-ortency-v1 pt-120">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-md-6">
                <div class="left-images-about">
                    <div class="inner">
                        <img src="img/about-11.png" data-aos="fade-down" class="img1" alt="">
                        <img src="img/1614360598755.jpg" class="img2" alt="">
                        <img src="img/about-12.png" data-aos="flip-left" data-aos-delay="800" class="img3" alt="">
                    </div>
                </div><!--/.left-images-about-->
            </div>
            <div class="col-md-6">
                    <div class="sec-title">
                        <h3><img src="img/icons/title-icon.svg" alt=""> About Our Company</h3>
                        <h2 class="tag1">Best Digital Marketing Agency For People</h2>
                    </div>
                    <p style="margin-top: 27px;">here are many great digital marketing agencies out there, but the best one for you will depend on your specific needs and goals. It's important to look for an agency that has a strong track record of success, a team of experienced and skilled professionals, and a comprehensive range of digital marketing services that align with your objectives. Additionally, a great digital marketing agency will be able to provide personalized and tailored solutions that fit your budget and deliver measurable results. It's always a good idea to do your research, read reviews and testimonials, and schedule consultations with different agencies to find the one that is the best fit for you.</p>
                    <ul class="list-icons d-flex flex-wrap align-items-start" style="margin-top: 27px;margin-bottom: 17px;">
                        <li>Digital Strategy</li>
                        <li>SEO Optimization</li>
                        <li>Marketing</li>
                        <li>First Working Process</li>
                    </ul>
                    <a href="#" class="btn btn-default">Read More</a>
                </div><!--/.right-content-about-->
            </div>
        </div>
    </div>
</section>
<!--about ortency end-->

<!--why choose us start-->
<section class="why-choose-us px-120">
    <div class="container">
        <div class="row g-4 gy-5 align-items-center">
            <div class="col-md-6">
                <div class="left-content-choose">
                    <div class="sec-title">
                        <h3><img src="img/icons/title-icon-infinity.svg" alt="">Why Choose Ortencey</h3>
                        <h2 class="tag1">Reason For Choosing Our Digital Agency</h2>
                    </div>
                    <p>Expertise: A good digital agency should have a team of professionals with a wide range of skills and expertise in various areas of digital marketing, such as SEO, PPC, social media marketing, content marketing, email marketing.</p>
                    <div class="single-progress">
                        <label class="d-flex justify-content-between">
                            <span>Software Development</span>
                            <span>85%</span>
                        </label>
                        <div class="progress">
                            <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top bottom"  role="progressbar" aria-label="Basic example" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--/.single-progress-->
                    <div class="single-progress">
                        <label class="d-flex justify-content-between">
                            <span>Web Development</span>
                            <span>95%</span>
                        </label>
                        <div class="progress">
                            <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200" data-aos-anchor-placement="top bottom"  role="progressbar" aria-label="Basic example" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--/.single-progress-->
                    <div class="single-progress">
                        <label class="d-flex justify-content-between">
                            <span>UL / UX Design</span>
                            <span>80%</span>
                        </label>
                        <div class="progress">
                            <div class="progress-bar" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1400" data-aos-anchor-placement="top bottom"  role="progressbar" aria-label="Basic example" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--/.single-progress-->
                </div><!--/.left-content-choose-->
            </div>
            <div class="col-md-6">
                <div class="right-img-choose">
                    <img src="img/choose-img25.jpg" alt="">
                    <div class="exp"><span>7</span> Years Experience</div>
                </div><!--/.right-img-choose-->
            </div>
        </div>
    </div>
</section>
<!--why choose us end-->

<!--reason to success start-->
<div class="reason-to_success-sec px-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="left-images-rsn">
                    <img src="img/reason-about-100.jpg" class="rsn1" alt="">
                    <img src="img/reason-about-101.jpg" class="rsn2" alt="">
                    <img src="img/reason-about-103.jpg" class="rsn3" alt="">
                </div><!--/.left-images-rsn-->
            </div>
            <div class="col-md-6">
                <div class="sec-title">
                    <h3><img src="img/icons/title-icon-infinity.svg" alt="">Reason of Our Success</h3>
                    <h2 class="tag1">Quality & Experience Best Digital Agency</h2>
                </div>
                <div class="success-tabs-about">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#our_mission_id" type="button" role="tab" aria-controls="our_mission_id" aria-selected="true">Our Mission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#our_vission_id" type="button" role="tab" aria-controls="our_vission_id" aria-selected="false">Experience</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#our_history_id" type="button" role="tab" aria-controls="our_history_id" aria-selected="false">Our History</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="our_mission_id" role="tabpanel" aria-labelledby="our_mission_id">
                            <div class="inner-tbs-success">
                                <p>To find a quality and experienced digital marketing agency, there are several factors you should consider:</p>
                                <div class="d-sm-flex align-items-center">
                                    <img src="img/worldMap.png" alt="">
                                    <ul class="list-icons">
                                        <li>Financial Growth System</li>
                                        <li>Customer Oriented Program Daily</li>
                                        <li>Dedicated Team member</li>
                                        <li>Product ux Design & Development</li>
                                    </ul>
                                </div>
                            </div><!--/.inner-tbs-success-->
                        </div>
                        <div class="tab-pane fade" id="our_vission_id" role="tabpanel" aria-labelledby="our_vission_id">
                            <div class="inner-tbs-success">
                                <p>Experience: Choose an agency with experience in your industry or niche. They will have a better understanding of your target audience and what works in your market.</p>
                                <div class="d-sm-flex align-items-center">
                                    <img src="img/worldMap.png" alt="">
                                    <ul class="list-icons">
                                        <li>Financial Growth System</li>
                                        <li>Customer Oriented Program Daily</li>
                                        <li>Dedicated Team member</li>
                                        <li>Product ux Design & Development</li>
                                    </ul>
                                </div>
                            </div><!--/.inner-tbs-success-->
                        </div>
                        <div class="tab-pane fade" id="our_history_id" role="tabpanel" aria-labelledby="our_history_id">
                            <div class="inner-tbs-success">
                                <p>The term Digital Marketing was first used in the 1990s. The digital age took off with the coming of the internet and the development of the Web 1.0 platform. The Web 1.0 platform allowed users to find the information they wanted but did not allow them to share this information over the web. Up until then, marketers worldwide were still unsure of the digital platform. They were not sure if their strategies would work since the internet had not yet seen widespread deployment.</p>
                                <div class="d-sm-flex align-items-center">
                                    <img src="img/worldMap.png" alt="">
                                    <ul class="list-icons">
                                        <li>Financial Growth System</li>
                                        <li>Customer Oriented Program Daily</li>
                                        <li>Dedicated Team member</li>
                                        <li>Product ux Design & Development</li>
                                    </ul>
                                </div>
                            </div><!--/.inner-tbs-success-->
                        </div>
                    </div>

                </div><!--/.success-tabs-about-->
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--reason to success end-->

<!--team area start-->
<section class="team-area-sec px-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="sec-title text-center">
                    <h3><img src="img/icons/title-icon-infinity.svg" alt=""> Team Member</h3>
                    <h2 class="tag1">Creative Team Member</h2>
                </div>
            </div>
            <div class="col-12 mt-50">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="team-member-inner" data-aos="flip-left" data-aos-delay="100">
                            <div class="imgs">
                                <img src="img/team100.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div class="name">
                                    <h2>Robert Sions</h2>
                                    <p>Business Consultant</p>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/.team-member-inner-->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-member-inner" data-aos="flip-left" data-aos-delay="300">
                            <div class="imgs">
                                <img src="img/team101.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div class="name">
                                    <h2>Ross Bing</h2>
                                    <p>App Developer</p>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/.team-member-inner-->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-member-inner" data-aos="flip-left" data-aos-delay="500">
                            <div class="imgs">
                                <img src="img/team102.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div class="name">
                                    <h2>Karikok Jahan</h2>
                                    <p>Executive Manager</p>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/.team-member-inner-->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-member-inner" data-aos="flip-left" data-aos-delay="700">
                            <div class="imgs">
                                <img src="img/team103.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div class="name">
                                    <h2>Dickerson MH</h2>
                                    <p>Agency Analysis</p>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/.team-member-inner-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--team area end-->

<!--fun fact start-->
<div class="fun-fact-sec px-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="fun-fact-wraps-v2">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="singl-fact-count  v2" data-aos="fade-in" data-aos-delay="100">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="img/icons/fun1.1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2 class="counter">1500 +</h2>
                                        <p>Project Complete</p>
                                    </div>
                                </div>
                            </div><!--/.singl-fact-count-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="singl-fact-count  v2"  data-aos="fade-in" data-aos-delay="200">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="img/icons/fun1.2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2 class="counter">150 +</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div><!--/.singl-fact-count-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="singl-fact-count  v2"  data-aos="fade-in" data-aos-delay="300">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="img/icons/fun1.3.png" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2 class="counter">35 +</h2>
                                        <p>Professional Team</p>
                                    </div>
                                </div>
                            </div><!--/.singl-fact-count-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="singl-fact-count  v2"  data-aos="fade-in" data-aos-delay="400">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-0">
                                        <div class="icon">
                                            <img src="img/icons/fun1.4.png" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-shrink-1">
                                        <h2 class="counter">120 +</h2>
                                        <p>Award win</p>
                                    </div>
                                </div>
                            </div><!--/.singl-fact-count-->
                        </div>
                    </div>
                </div><!--/.fun-fact-wraps-->
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--fun fact end-->
@endsection
