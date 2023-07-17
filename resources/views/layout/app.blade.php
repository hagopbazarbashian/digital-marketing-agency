<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Ortencey Marketing Agency">
    <meta name="author" content="">

    <title>Ortencey Marketing Agency</title>

    @include('layout.style')

    @include('layout.underscript')
    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    {{-- <div class="se-pre-con"></div> --}}

    <!-- main nav start -->
    <header class="header-style-1">
        <div class="top_nav_soc">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xl-8">
                        <div class="left-content-top">
                            <ul>
                                <li class="d-none d-xl-inline-block">Welcome to Ortencey Digital Market Agency</li>
                                {{-- <li>
                                    <a href="#"><i class='bx bxs-phone'></i> +88 ( 5548 ) 6548</a>
                                </li> --}}
                                <li>
                                    <a href="mailto:hagopbazarbasian@gmail.com"><i class='bx bxs-envelope'></i>hagopbazarbasian@gmail.com</a>
                                </li>
                            </ul>
                        </div><!--/.left-content-top-->
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <div class="right-content-top">
                            <ul>
                                <li>
                                    <div id="options"
                                         data-input-name="country2"
                                         data-selected-country="US">
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                                </li>
                            </ul>
                        </div><!--/.right-content-top-->
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="img/logo.png"  alt="image">
                            </a>
                        </div><!--/.logo-->
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                @if (session()->get('succes'))
                <div class="alert alert-success" role="alert">
                  {{ session()->get('succes') }}
                </div>
                @endif
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="img/logo.png" alt="image">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> Services <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('service') }}" class="nav-link {{ request()->is('service') ? 'active' : '' }}">Service Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('service-details') }}" class="nav-link {{ request()->is('service-details') ? 'active' : '' }}">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> Pages <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('team') }}" class="nav-link {{ request()->is('team') ? 'active' : '' }}">Team</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="team-details.html" class="nav-link ">Team Details</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a href="{{ url('portfolio') }}" class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="portfolio-details.html" class="nav-link ">Portfolio Details</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a href="{{ url('pricing') }}" class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="testimonial.html" class="nav-link ">Testimonial</a>
                                        </li> --}}
                                        {{-- <li class="nav-item">
                                            <a href="faq.html" class="nav-link ">Faq</a>
                                        </li> --}}
                                        {{-- <li class="nav-item">
                                            <a href="404.html" class="nav-link ">404</a>
                                        </li> --}}
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link "> Shop <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.html" class="nav-link ">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="shop-details.html" class="nav-link ">Shop Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link ">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link ">Checkout</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> News <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('blog-full') }}" class="nav-link {{ request()->is('blog-full') ? 'active' : '' }}">Blog Full</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="blog-right.html" class="nav-link ">Blog Right</a>
                                        </li> --}}
                                        {{-- <li class="nav-item">
                                            <a href="blog-left.html" class="nav-link ">Blog Left</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a href="{{ route('blog-details') }}" class="nav-link nav-link {{ request()->is('blog-details') ? 'active' : '' }}">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                                </li>
                            </ul><!--/.navbar-nav -->
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a class="opt" href="#search"><i class="bx bx-search"></i></a>
                                </div>
                                {{-- <div class="option-item">
                                    <a class="opt" href="#ortencySlideCartCanvas"  data-bs-toggle="offcanvas" data-bs-target="#ortencySlideCartCanvas" aria-controls="ortencySlideCartCanvas"><i class='bx bx-shopping-bag' ></i><span class="badge">3</span></a>
                                </div> --}}
                                <div class="option-item d-none d-xl-inline-block">
                                    <a href="{{ url('contact') }}" class="btn">Free Quote <i class='bx bx-right-arrow-alt' ></i></a>
                                </div>
                            </div><!--/.others-options-->
                        </div>
                    </nav><!--/.navbar-->
                </div>
            </div>

        </div>
    </header>
    <!-- /.navbar -->

     <!--popup search box-->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" >
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!--popup search box-->
    @yield('main_content')
    <!--footer area start-->
    <footer class="footers">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <div class="newsletter-form">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div class="left-content">
                                <p>For Digital Marketing Agency</p>
                                <h2>Join Our Agency Community</h2>
                            </div>
                            <div class="right-content">
                                <form>
                                    <div class="newslttr-grp">
                                        <input type="email" placeholder="Enter your email address" class="form-control">
                                        <button type="submit" class="btn">Subscribe Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--/.newsletter-form-->
                </div>
                <div class="col-12">
                    <div class="footer-widgets-wrap">
                        <div class="row g-4 gy-5">
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget about">
                                    <h2>About Company</h2>
                                    <p>Ortencey is a digital marketing agency that has been providing quality services for seven years. Founded in 2016, the company has established itself as a leader in the digital marketing industry, offering a wide range of services to help businesses enhance their online presence, generate leads, and increase sales.</p>
                                    <ul class="socials">
                                        <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget">
                                    <h2>Featured Services </h2>
                                    <ul class="navs">
                                        <li><a href="#">Social Media Marketing</a></li>
                                        <li><a href="#">Pay Per Click Management</a></li>
                                        <li><a href="#">Search Engine Optimization</a></li>
                                        <li><a href="#">Free SEO Analysis</a></li>
                                        <li><a href="#">Case Studies</a></li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget">
                                    <h2>Recent Post </h2>
                                    <ul class="recent-posts">
                                        <li class="d-flex align-items-center">
                                            <div class="flex-grow-0">
                                                <img src="img/blog1000000.jpg" alt="">
                                            </div>
                                            <div class="flex-shrink-1">
                                                <a href="blog-details.html">Thoughtful man using laptop pondering </a>
                                                <p><i class='bx bx-calendar'></i> 09 Dec 2022</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="flex-grow-0">
                                                <img src="img/blog200000.jpg" alt="">
                                            </div>
                                            <div class="flex-shrink-1">
                                                <a href="blog-details.html">Thoughtful man using laptop pondering </a>
                                                <p><i class='bx bx-calendar'></i> 09 Dec 2022</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="ftr-widget">
                                    <h2>Contact Us</h2>
                                    <ul class="contacts">
                                        {{-- <li>
                                            <i class='bx bxs-phone' ></i>
                                            <a href="tel:7501234">+(323) 750-1234</a>
                                        </li> --}}
                                        <li>
                                            <i class='bx bxs-envelope' ></i>
                                            <a href="mailto:hagopbazarbasian@gmail.com">hagopbazarbasian@gmail.com</a>
                                        </li>
                                        <li>
                                            <i class='bx bxs-map' ></i>
                                            <address>374 FA Tower, William S Blvd, Melbourne
                                                2721, IL, USA</address>
                                        </li>
                                    </ul>
                                </div><!--/.ftr-widget-->
                            </div>
                        </div>
                    </div><!--/.footer-widgets-wrap-->
                </div>
            </div>
        </div><!--/.container-->
    </footer>
    <div class="copyright-conts">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6">
                    <p>2023 © All rights reserved by Hag-Web</p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->
    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="bx bx-chevron-up"></i></a>
    @include('layout.script')
</body>
</html>
