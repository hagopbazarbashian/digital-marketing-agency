@extends('layout.app') @section('main_content')
<!--slidercart canvas-->
<!--hero section start-->
<section class="banner-area-wrap-v2">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="left-content-hero-v2">
               <h5>Get Started With Developer Smart</h5>
               <h1>We Are The Best Developer Smart <strong>Agency.</strong></h1>
               {{--
               <p>The 3 golden rules professional Developer Smart Agency don’t want you to know about.</p>
               --}}
               <div class="btn-groups">
                  <a href="{{ url('contact') }}" class="btn btn-default">Discover More</a>
                  <a href="{{ url('contact') }}" class="btn btn-get">Get Started</a>
               </div>
            </div>
            <!--/.left-content-hero-->
         </div>
         <div class="col-lg-6">
            <div class="right-content-herov2">
               <div class="imgs">
                  <img src="{{asset('img/hero.png')}}" data-aos="fade-up" alt="" />
               </div>
            </div>
            <!--/.right-content-hero-->
         </div>
      </div>
   </div>
   <!--/.container-->
   <span class="banner-frame-one"></span>
   <span class="banner-frame-two v2"></span>
   <span class="banner-frame-three"></span>
   <span class="banner-frame-four"></span>
</section>
<!--hero section end-->
<section class="two-section-for-bg">
   <!--our services area start-->
   <div class="ortency-services-sec-v2 pt-120">
      <div class="container">
         <div class="row g-4">
            <div class="col-md-6 col-lg-3">
               <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="100">
                  <div class="icon">
                     <img src="img/icons/service-icon1.svg" alt="" />
                  </div>
                  <div class="cont">
                     <h2>Graphics Design</h2>
                     <p>
                        We blend artistic ingenuity with strategic thinking. Every design element is meticulously crafted to align with your brand's core values and goals. From logos to marketing collaterals, we ensure that every piece of
                        design contributes to your brand's narrative.
                     </p>
                  </div>
               </div>
               <!--/.single-services-ort-v2-->
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="300">
                  <div class="icon">
                     <img src="img/icons/service-icon2.svg" alt="" />
                  </div>
                  <div class="cont">
                     <h2>Web Developer</h2>
                     <p>
                        we recognize that a website is more than just a digital presence – it's a dynamic platform that can engage, inform, and convert visitors into loyal customers. Our team of skilled web developers is dedicated to
                        crafting websites that not only look exceptional but also function flawlessly across devices and browsers.
                     </p>
                  </div>
               </div>
               <!--/.single-services-ort-v2-->
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="500">
                  <div class="icon">
                     <img src="img/icons/service-icon3.svg" alt="" />
                  </div>
                  <div class="cont">
                     <h2>Digital Marketing</h2>
                     <p>
                        we understand that effective digital marketing is about more than just posting content – it's about crafting compelling narratives, leveraging data-driven insights, and creating connections that convert. Our team of
                        experienced digital marketers is dedicated to delivering tailored strategies that help your brand thrive in the digital realm.
                     </p>
                  </div>
               </div>
               <!--/.single-services-ort-v2-->
            </div>
            <div class="col-md-6 col-lg-3">
               <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="700">
                  <div class="icon">
                     <img src="img/icons/service-icon4.svg" alt="" />
                  </div>
                  <div class="cont">
                     <h2>App Design</h2>
                     <p>
                        we recognize that mobile apps have become an integral part of modern business strategies. Our team of experienced app designers combines creativity with technical expertise to craft apps that not only look great but
                        also offer seamless experiences for users.
                     </p>
                  </div>
               </div>
               <!--/.single-services-ort-v2-->
            </div>
         </div>
      </div>
      <!--/.container-->
   </div>
   <!--our services area end-->

   <!--about ortency start-->
   <div class="about-ortency-v1 px-120">
      <div class="container">
         <div class="row gy-5 align-items-center">
            <div class="col-md-6">
               <div class="left-images-about-v2">
                  <div class="inner">
                     <img src="{{asset('img/about-img.png')}}" data-aos="fade-down" class="img1" alt="" />
                  </div>
               </div>
               <!--/.left-images-about-->
            </div>
            <div class="col-md-6">
               <div class="right-content-about v2">
                  <div class="sec-title v2">
                     <h3>About Our Company</h3>
                     <h2 class="tag1">Learn How to Grow your Business in Days</h2>
                  </div>
                  <div id="businessGrowthContainer">
                     <!--<h1>Unlock Rapid Business Growth: Learn How in Days!</h1>-->
                     <p>Welcome to Developer Smart, where we empower businesses to thrive and succeed. Discover the secrets to exponential growth in just days with our cutting-edge strategies and expert guidance.</p>

                     <ul>
                        <li>🚀 <strong>Accelerate Your Success:</strong> Transform your business trajectory and surpass your goals. Our proven methods are designed to fast-track growth, giving you a competitive edge in the market.</li>
                        <li>
                           📈 <strong>Strategic Insights, Immediate Impact:</strong> Gain access to strategic insights that deliver instant results. From marketing mastery to operational efficiency, we cover all aspects to propel your
                           business forward.
                        </li>
                        <li>
                           🔍 <strong>Tailored Solutions for You:</strong> No two businesses are alike. That's why our approach is personalized to fit your unique needs. Uncover customized solutions that resonate with your brand and
                           audience.
                        </li>
                        <li>🌐 <strong>Stay Ahead of the Curve:</strong> In today's dynamic business landscape, staying ahead is non-negotiable. Join us on the journey to continuous innovation and success.</li>
                     </ul>

                     <p>Ready to witness unparalleled growth? Let's embark on this transformative journey together.</p>
                     <a href="{{ url('contact') }}" class="btn btn-default">Get Started</a>
                  </div>
               </div>
               <!--/.right-content-about-->
            </div>
         </div>
      </div>
   </div>
   <!--about ortency end-->
</section>
<!--porfolio area start-->
@if($portfolios_show)
<div class="portfolio-sec pt-120">
   <div class="sec-title v2 text-center mb-50">
      <h3>Our Portfolio</h3>
      <h2 class="tag1">Our Impressive Portfolio</h2>
   </div>
   <div class="portfolio-slider-wrap">
      @foreach ($portfolios as $portfolio)
      <div class="single">
         <div class="portfolio-inner-sl">
            <div class="imgs">
               <img src="{{ asset('portfolio/' . $portfolio->image) }}" alt="" />
            </div>
            <div class="hidden-cont">
               <div class="d-flex justify-content-between">
                  <div class="name">
                     <h3>{{$portfolio->title}}.</h3>
                     {{--
                     <p>Print, Books</p>
                     --}}
                  </div>
                  <div class="btns">
                     <a href="{{route('single',$portfolio->id)}}" class="btn"><i class="bx bx-plus"></i></a>
                  </div>
               </div>
            </div>
            <a href="{{route('single',$portfolio->id)}}" class="go-hidden"><i class="bx bx-plus"></i></a>
         </div>
         <!--/.portfolio-inner-sl-->
      </div>
      @endforeach
   </div>
   <!--/.portfolio-slider-wrap-->
</div>
@endif
<!-- Button to trigger the modal -->
<button type="button" id="openButton" class="btn mod btn-primary">Open Modal</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <!-- Modal Body -->
         <!-- Modal Body -->
         <div class="modal-body">
            <section class="pricing-plan-sec pt-120">
               <div class="container">
                  <div class="row g-0">
                     <div class="col-12">
                        <div class="sec-title text-center mb-50">
                           <h3><img src="img/icons/title-icon-infinity.svg" alt="" /></h3>
                           <h2 class="tag1">Ստեղծեք ձեր սեփական կայքը</h2>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="row g-4 justify-content-center">
                           <div class="col-md-6 col-xl-4">
                              <div class="single-plan-area features" data-aos="fade-up" data-aos-delay="100">
                                 <div class="icons">
                                    <img src="img/icons/plan1.svg" alt="" />
                                 </div>
                                 <div class="plan-hdr">
                                    <h2>
                                       Առաջարկում<br />
                                       ենք ձեզ
                                    </h2>
                                    <h1>Անվճար</h1>
                                 </div>
                                 <div class="plan-body">
                                    <ul class="list-icons d-flex flex-column">
                                       <li>(.RU,.AM,.COM)դոմեն</li>
                                       <li>Հոստինգ</li>
                                       <li>Դիզայներական</li>
                                       <li>Խորհրդատվություն</li>
                                       <li>Լոգոյի պատրաստում</li>
                                    </ul>
                                    <a href="https://wa.me/+37455446012?text=Hello" target="_blank" class="btn">Զրուցեք WhatsApp-ով</a>
                                 </div>
                              </div>
                              <!--/.single-plan-area-->
                           </div>
                           <!-- Add other plan sections here if needed -->
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</div>
<!--feature text start-->
<div class="feature-txt-v2 px-120">
   <div class="container">
      <div class="row g-4 align-items-center">
         <div class="col-md-6">
            <div class="left-content-ftr">
               <div class="sec-title v2">
                  <h3>Bringing Action To Brands</h3>
                  <h2 class="tag1">Business Indices, Visitor Traffic Latest Analytic Tools</h2>
                  <p>
                     At Digital Market Agency, we recognize that data is the cornerstone of informed decision-making. Our suite of business indices and visitor traffic analytic tools offer a comprehensive view of your business's
                     performance, enabling you to identify trends, seize opportunities, and stay ahead of the curve.
                  </p>
               </div>
               <div class="inner-bx-ftr" data-aos="fade-in">
                  <p>Get Started With a Dynamic Web Optimization Campaign.</p>
                  <ul>
                     <li>
                        <h2>10.95%</h2>
                        <span>Increase In Monthly</span>
                     </li>
                     <li>
                        <h2>6.50%</h2>
                        <span>Decrease In Yearly</span>
                     </li>
                  </ul>
               </div>
            </div>
            <!--/.left-content-ftr-->
         </div>
         <div class="col-md-6">
            <div class="right-img-ftr text-end">
               <img src="{{asset('img/feature-img.png')}}" data-aos="flip-left" data-aos-duration="2000" alt="" />
            </div>
            <!--/.right-img-ftr-->
         </div>
      </div>
   </div>
   <!--/.container-->
</div>
<!--feature text end-->
@endsection
