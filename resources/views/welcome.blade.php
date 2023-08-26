@extends('layout.app')
@section('main_content')
 <!--slidercart canvas-->
 <div class="offcanvas offcanvas-end slide_cart_ortency" tabindex="-1" id="ortencySlideCartCanvas" aria-labelledby="ortencySlideCartCanvas">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Shopping Cart <span class="badge">4</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
    <div class="offcanvas-body">
        <div class="ortency-shopping-cart-slide">
            <div class="single-items-cart d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="imgs">
                        <img src="img/shop/products9.png" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h4><a href="product-details.html">Affinity Queen Poster Bed</a></h4>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="quantity d-flex align-items-center justify-content-center">
                            <span class="quantity-remove quantity-button"><i class="bx bx-minus"></i> </span>
                            <input type="number" step="1" min="1" value="1" class="">
                            <span class="quantity-add quantity-button"><i class="bx bx-plus"></i> </span>
                        </div>
                        <p>1x $570</p>
                    </div>
                </div>
                <a href="#" class="remote-item-cart"><img src="img/icons/times.svg" alt=""></a>
            </div><!--/.single-items-cart-->
            <div class="single-items-cart d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="imgs">
                        <img src="img/shop/products2.png" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h4><a href="product-details.html">Affinity Queen Poster Bed</a></h4>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="quantity d-flex align-items-center justify-content-center">
                            <span class="quantity-remove quantity-button"><i class="bx bx-minus"></i> </span>
                            <input type="number" step="1" min="1" value="1" class="">
                            <span class="quantity-add quantity-button"><i class="bx bx-plus"></i> </span>
                        </div>
                        <p>1x $570</p>
                    </div>
                </div>
                <a href="#" class="remote-item-cart"><img src="img/icons/times.svg" alt=""></a>
            </div><!--/.single-items-cart-->
            <div class="single-items-cart d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="imgs">
                        <img src="img/shop/products4.png" alt="">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <h4><a href="product-details.html">Affinity Queen Poster Bed</a></h4>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="quantity d-flex align-items-center justify-content-center">
                            <span class="quantity-remove quantity-button"><i class="bx bx-minus"></i> </span>
                            <input type="number" step="1" min="1" value="1" class="">
                            <span class="quantity-add quantity-button"><i class="bx bx-plus"></i> </span>
                        </div>
                        <p>1x $570</p>
                    </div>
                </div>
                <a href="#" class="remote-item-cart"><img src="img/icons/times.svg" alt=""></a>
            </div><!--/.single-items-cart-->
        </div><!--/.ortency-shopping-cart-slide-->
        <div class="ortency-cart-subtotal">
            <div class="d-flex justify-content-between">
                <h4>Subtotal</h4>
                <h4 class="price">$920.00</h4>
            </div>
            <p>Taxes and shipping calculated at checkout</p>
            <div class="btns">
                <a href="cart.html" class="btn view_ct">View Cart</a>
                <a href="#" class="btn ">Add To Cart</a>
            </div>
            <div class="free_shipping_cart">
                <div class="d-flex justify-content-between align-items-center">
                    <img src="img/icons/shipping-icon.svg" alt="">
                    <h5>Spend $ 499.00 to Free Shipping</h5>
                </div>
            </div>
        </div><!--/.ortency-cart-subtotal-->
    </div>
</div>
<!--slidercart canvas-->
<!--hero section start-->
<section class="banner-area-wrap-v2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="left-content-hero-v2">
                    <h5>Get Started With Ortencey</h5>
                    <h1>We Are The Best Digital <strong>Marketing</strong> Agency.</h1>
                    <p>The 3 golden rules professional Digital Marketing Agency don’t
                        want you to know about.</p>
                    <div class="btn-groups">
                        <a href="{{ url('contact') }}" class="btn btn-default">Discover More</a>
                        <a href="{{ url('contact') }}" class="btn btn-get">Get Started</a>

                    </div>
                </div><!--/.left-content-hero-->
            </div>
            <div class="col-lg-6">
                <div class="right-content-herov2">
                    <div class="imgs">
                        <img src="{{asset('img/hero.png')}}" data-aos="fade-up" alt="">
                    </div>
                </div><!--/.right-content-hero-->
            </div>
        </div>
    </div><!--/.container-->
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
                            <img src="img/icons/service-icon1.svg" alt="">
                        </div>
                        <div class="cont">
                            <h2>Graphics Design</h2>
                            <p>We blend artistic ingenuity with strategic thinking. Every design element is meticulously crafted to align with your brand's core values and goals. From logos to marketing collaterals, we ensure that every piece of design contributes to your brand's narrative.</p>
                        </div>
                    </div><!--/.single-services-ort-v2-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="300">
                        <div class="icon">
                            <img src="img/icons/service-icon2.svg" alt="">
                        </div>
                        <div class="cont">
                            <h2>Web Developer</h2>
                            <p>we recognize that a website is more than just a digital presence – it's a dynamic platform that can engage, inform, and convert visitors into loyal customers. Our team of skilled web developers is dedicated to crafting websites that not only look exceptional but also function flawlessly across devices and browsers.</p>
                        </div>
                    </div><!--/.single-services-ort-v2-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="500">
                        <div class="icon">
                            <img src="img/icons/service-icon3.svg" alt="">
                        </div>
                        <div class="cont">   
                            <h2>Digital Marketing</h2>
                            <p>we understand that effective digital marketing is about more than just posting content – it's about crafting compelling narratives, leveraging data-driven insights, and creating connections that convert. Our team of experienced digital marketers is dedicated to delivering tailored strategies that help your brand thrive in the digital realm.</p>
                        </div>
                    </div><!--/.single-services-ort-v2-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-services-ort-v2" data-aos="fade-in" data-aos-delay="700">
                        <div class="icon">
                            <img src="img/icons/service-icon4.svg" alt="">
                        </div>
                        <div class="cont">
                            <h2>App Design</h2>
                            <p>we recognize that mobile apps have become an integral part of modern business strategies. Our team of experienced app designers combines creativity with technical expertise to craft apps that not only look great but also offer seamless experiences for users.</p>
                        </div>
                    </div><!--/.single-services-ort-v2-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--our services area end-->

    <!--about ortency start-->
    <div class="about-ortency-v1 px-120">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-md-6">
                    <div class="left-images-about-v2">
                        <div class="inner">
                            <img src="{{asset('img/about-img.png')}}" data-aos="fade-down" class="img1" alt="">
                        </div>
                    </div><!--/.left-images-about-->
                </div>
                <div class="col-md-6">
                    <div class="right-content-about v2">
                        <div class="sec-title  v2">
                            <h3>About Our Company</h3>
                            <h2 class="tag1">Learn How to Grow your Business in Days</h2>
                        </div>
                        <p>Welcome to Ortencey Digital Market Agency, your ultimate partner in achieving rapid business expansion. Are you ready to take your business to new heights in a matter of days? Our proven strategies and expert guidance will empower you to accelerate growth, maximize profits, and establish a lasting competitive edge.</p>
                        <ul class="list-icons v2 d-flex flex-column align-items-start">
                            <li>01. Best market Research Policy.</li>
                            <li>02. 24/7 Days super Support.</li>
                        </ul>
                        <a href="{{ url('contact') }}" class="btn btn-default">Read More</a>
                    </div><!--/.right-content-about-->
                </div>
            </div>
        </div>
    </div>
    <!--about ortency end-->
</section>

<!--our services area start-->
<section class="our-services-v2 px-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="sec-title v2 text-center mb-50">
                    <h3>Our Services</h3>
                    <h2 class="tag1">Best Quality Services</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="single-service-inner_v2" data-aos="fade-up">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-4">
                                    <div class="imgs">
                                        <img src="{{asset('img/services1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 col-xl-6 ">
                                    <div class="cont">
                                        <h2>Search Engine Optimization</h2>
                                        <p>At Ortencey Digital Market Agency, we understand that in the world of online business, visibility is everything. Our team of SEO experts possesses the knowledge, experience, and passion to propel your website to the forefront of search engines, ensuring your business is discovered by those who matter most.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-2 text-center">
                                    <a href="{{ url('contact') }}" class="btn style2">Read More</a>
                                </div>
                            </div>
                        </div><!--/.single-service-inner_v2-->
                    </div>
                    <div class="col-12">
                        <div class="single-service-inner_v2" data-aos="fade-up">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-4">
                                    <div class="imgs">
                                        <img src="{{asset('img/services2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 col-xl-6 mx-auto">
                                    <div class="cont">
                                        <h2>Web Design & Development</h2>
                                        <p>At Ortencey Digital Market Agency,, we understand that a website is more than just an online presence; it's a powerful tool for connecting with customers, conveying your brand story, and achieving your business objectives.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-2 text-center">
                                    <a href="{{ url('contact') }}" class="btn style2">Read More</a>
                                </div>
                            </div>
                        </div><!--/.single-service-inner_v2-->
                    </div>
                    <div class="col-12">
                        <div class="single-service-inner_v2" data-aos="fade-up">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-4">
                                    <div class="imgs">
                                        <img src="{{asset('img/services3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 col-xl-6 mx-auto">
                                    <div class="cont">
                                        <h2>Email and Content Marketing</h2>
                                        <p>At Ortencey Digital Market Agency, we understand that meaningful communication is the foundation of strong customer relationships. Our expert team combines the art of storytelling with data-driven strategies to create campaigns that resonate and deliver results.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-2 text-center">
                                    <a href="{{ url('contact') }}" class="btn style2">Read More</a>
                                </div>
                            </div>
                        </div><!--/.single-service-inner_v2-->
                    </div>
                    <div class="col-12">
                        <div class="single-service-inner_v2" data-aos="fade-up">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-4">
                                    <div class="imgs">
                                        <img src="{{asset('img/services4.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 col-xl-6 mx-auto">
                                    <div class="cont">
                                        <h2>Social Media Network Marketing </h2>
                                        <p>At Digital Market Agency, we understand that social media is more than just posts; it's a dynamic realm that demands attention, strategy, and creativity. Our team of experienced social media marketers is dedicated to delivering campaigns that not only resonate but also deliver tangible results.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xl-2 text-center">
                                    <a href="{{ url('contact') }}" class="btn style2">Read More</a>
                                </div>
                            </div>
                        </div><!--/.single-service-inner_v2-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--our services area end-->

 <!--porfolio area start-->
 <div class="portfolio-sec pt-120">
    <div class="sec-title v2 text-center mb-50">
        <h3>Our Portfolio</h3>
        <h2 class="tag1">Our Impressive Portfolio</h2>
    </div>
    <div class="portfolio-slider-wrap">
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/pickup-2.png')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/f-and-b-software-modules-features-and-functionalities-bottom.png')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/attachment_89547603.jpg')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/grocery-ecommerce-website-development-Kerala-India.jpg')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/blogpost.jpg')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/Build-Realtime-chat-app.png')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/opendi-local-listing-bwa-01.png')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/jobportal-free-template.jpg')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/XII2UIITYNEZBNM4BE2GI3PIAY.jpg')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/8b75d6197aa027b41cd8c96776ac5c77.jpg')}}" alt="">
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
        <div class="single">
            <div class="portfolio-inner-sl">
                <div class="imgs">
                    <img src="{{asset('img/e480b7b7e33eaa4a13113bb7a6d9f6fd.jpg')}}" alt="">
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
    </div><!--/.portfolio-slider-wrap-->
</div>
<!--porfolio area end-->

<!--pricing plan start-->
<section class="pricing-plan-sec pt-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="sec-title text-center mb-50">
                    <h3><img src="img/icons/title-icon-infinity.svg" alt=""> Our Pricing</h3>
                    <h2 class="tag1">Our Best Pricing Plan</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="single-plan-area features" data-aos="fade-up" data-aos-delay="100">
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
                                    <li>250 MB Storage</li>
                                    <li>250 MB Bandwidth</li>
                                    <li>Basic web page</li>
                                    <li>Subdomain</li>
                                    <li>Online Support</li>
                                    <li class="dis">Unlimited Updates</li>
                                </ul>
                                <a href="{{route('basic-plan')}}" class="btn">Choose Plan</a>
                            </div>
                        </div><!--/.single-plan-area-->
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="single-plan-area" data-aos="fade-up" data-aos-delay="300">
                            <div class="icons">
                                <img src="img/icons/plan2.svg" alt="">
                            </div>
                            <div class="plan-hdr">
                                <h2>Gold Plan</h2>
                                <h1><sup>$</sup>6<small>Per Month</small></h1>
                            </div>
                            <div class="plan-body">
                                <ul class="list-icons d-flex flex-column align-items-center">
                                    <li>Free Domain for 1 year</li>
                                    <li>3GB storage</li>
                                    <li>3GB bandwidth</li>
                                    <li>Connect Your Domain</li>
                                    <li>Store</li>
                                    <li>Unlimited Updates</li>
                                    <li>Online Support</li>
                                </ul>
                                <a href="{{ url('contact') }}" class="btn">Choose Plan</a>
                            </div>
                        </div><!--/.single-plan-area-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--pricing plan end-->
<!-- Button to trigger the modal -->
<button type="button" id="openButton" class="btn mod btn-primary">Open Modal</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Body -->
            <div class="modal-body">
                <section class="pricing-plan-sec pt-120">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="sec-title text-center mb-50">
                                    <h3><img src="img/icons/title-icon-infinity.svg" alt="">Our Pricing</h3>
                                    <h2 class="tag1">Create Your Own Website for Free</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="single-plan-area features" data-aos="fade-up" data-aos-delay="100">
                                            <div class="icons">
                                                <img src="img/icons/plan1.svg" alt="">
                                            </div>
                                            <div class="plan-hdr">
                                                <h2>Basic Plan</h2>
                                                <h1>Free</h1>
                                            </div>
                                            <div class="plan-body">
                                                <ul class="list-icons d-flex flex-column align-items-center">
                                                    <li>Free Consultations</li>
                                                    <li>Business Planning</li>
                                                    <li>Investment Process</li>
                                                    <li>Basic web page</li>
                                                    <li class="dis">Online Support</li>
                                                    <li class="dis">Unlimited Updates</li>
                                                </ul>
                                                <a href="{{ route('basic-plan') }}" class="btn">Choose Plan</a>
                                            </div>
                                        </div><!--/.single-plan-area-->
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
                        <p>At Digital Market Agency, we recognize that data is the cornerstone of informed decision-making. Our suite of business indices and visitor traffic analytic tools offer a comprehensive view of your business's performance, enabling you to identify trends, seize opportunities, and stay ahead of the curve.</p>
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
                </div><!--/.left-content-ftr-->
            </div>
            <div class="col-md-6">
                <div class="right-img-ftr text-end">
                    <img src="{{asset('img/feature-img.png')}}" data-aos="flip-left" data-aos-duration="2000" alt="">
                </div><!--/.right-img-ftr-->
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--feature text end-->

<!--contact area start-->
{{-- <div class="contact-area-sec pb-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="contact-inner-wrap" data-aos="fade-up">
                    <div class="row g-4 gy-5">
                        <div class="col-md-6">
                            <div class="left-content-video-modal d-flex align-items-center flex-column">
                                <a href="#" class="video-btn" data-bs-toggle="modal" data-bs-target="#myModalVideo" data-src="">
                                    <div class="button-outer-circle has-scale-animation"></div>
                                    <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                    <div class="button-icon is-play">
                                        <svg height="100%" width="100%" fill="#3661FC">
                                            <polygon class="triangle" points="5,0 30,15 5,30" ></polygon>
                                            <path class="path" d="M5,0 L30,15 L5,30z" fill="none" stroke="#3661FC" stroke-width="1"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div><!--/.left-content-video-modal-->
                        </div>
                        <div class="col-md-6">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="right-contact-frm">
                                <div class="sec-title">
                                    <h3 class="text-white"><img src="img/icons/title-icon-infinity.svg" alt="">Make an Appointment</h3>
                                    <h2 class="text-white tag1">Start New Project With Us</h2>
                                </div>
                                <div class="forms-wrap-cont pt-50">
                                    <form action="{{route('store-appointment')}}" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}" @error('name') style="border: 1px solid red;" @enderror>
                                                @error('name')
                                                  <p>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" @error('email') style="border: 1px solid red;" @enderror>
                                                @error('email')
                                                  <p>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="topic" placeholder="Business Topic" value="{{ old('topic') }}" @error('topic') style="border: 1px solid red;" @enderror>
                                                @error('topic')
                                                  <p>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="4" name="body" placeholder="Your Message" value="{{ old('body') }}" @error('body') style="border: 1px solid red;" @enderror></textarea>
                                                @error('body')
                                                  <p>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-default">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--/.forms-wrap-cont-->
                            </div><!--/.right-contact-frm-->
                        </div>
                    </div>
                </div><!--/.contact-inner-wrap-->
            </div>
        </div>
    </div><!--/.container-->
</div> --}}
<!--contact area end-->
<!--Testimonial v2 end-->
<!-- video pop -->
{{-- <div class="modal fade video-pop" id="myModalVideo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="loading" id="video"  allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

