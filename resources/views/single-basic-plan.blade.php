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

    <meta name="description" content="">
    <meta name="author" content="">

    <title>create free website</title>
    <link rel="icon" href="{{ asset('img/fav/favicon-96x96.png') }}">
    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="img/fav/android-icon-48x48.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/fav/android-icon-72x72.png') }}" >
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/fav/apple-icon-114x114.png') }}" >

    <!--bootstrap v5.2.3 -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!--flag css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
    <!--meanmenu-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/meanmenu.css')}}">
    <!--icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/boxicons.min.css')}}">
    <!--aos-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/aos.css')}}">
    <!--slick slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <!--jquery ui-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--main style-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--modernizr-->
    <script src="{{asset('js/vendor/modernizr.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <!-- <div class="se-pre-con"></div> -->

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
                                    <a href="mailto:support@developsmart.xyz"><i class='bx bxs-envelope'></i>support@developsmart.xyz</a>
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

            <div class="main-navbar">
                @if (session()->get('succes'))
                <div class="alert alert-success" role="alert">
                  {{ session()->get('succes') }}
                </div>
                @endif
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="https://developsmart.xyz/img/logo.png" alt="image">
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


  <!--products page wrap start-->
<section class="products-wrap-pg px-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            <h1>{{$page->name}}</h1>
                        </div>
                        <div class="products-all-results">
                            <div class="row g-4 ">
                                @foreach ($storepagestyles as $key=>$storepagestyle)
                                <div class="col-md-6 col-lg-4">
                                    <div class="custom-product-wrap">
                                        <form action="{{route('store.data')}}" method="post">
                                            @csrf
                                            <div class="cont">
                                                <input type="hidden" name="name" value="{{$storepagestyle->name}}">
                                                <input type="hidden" name="id" value="{{$storepagestyle->page->name}}{{$storepagestyle->page_id}}">
                                                <h2>{!!$storepagestyle->icon!!}</h2>{{-- <img class="prd" src="{{asset('/page//'.$page->image)}}" alt=""> --}}
                                                <h3><a href="">{{$storepagestyle->name}}</a></h3>
                                                <button type="submit" class="add_cart"><i class="fa fa-pencil-square-o"></i>Start Now</button>
                                            </div>
                                        </form>
                                    </div><!--/.custom-product-wrap-->
                                </div>
                                @endforeach
                            </div>
                        </div><!--/.products-all-results-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-fluid-->
</section>
<!--products page wrap end-->

     <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="bx bx-chevron-up"></i></a>
    <!--jquery-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!--bootstrap bundle v5.2.3-->
    <script src="{{asset('js/vendor/bootstrap.bundle.js')}}"></script>
    <!--meanmenu-->
    <script src="{{asset('js/vendor/jquery.meanmenu.js')}}"></script>
    <!--flag-->
    <script src="{{asset('js/vendor/jquery.flagstrap.min.js')}}"></script>
    <!--aos-->
    <script src="{{asset('js/vendor/aos.js')}}"></script>
    <!--slick-->
    <script src="{{asset('js/vendor/slick.min.js')}}"></script>
    <!--easing js-->
    <script src="{{asset('js/vendor/easing.js')}}"></script>
    <!--price ranger-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <!--main script-->
    <script src="js/main.js"></script>

</body>
</html>
