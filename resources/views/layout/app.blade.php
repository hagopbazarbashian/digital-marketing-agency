<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Ortencey Marketing Agency">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ortencey Marketing Agency</title>
    @include('layout.style')
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
                                {{-- <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                                </li> --}}
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
                                        {{-- <li class="nav-item">
                                            <a href="{{ url('team') }}" class="nav-link {{ request()->is('team') ? 'active' : '' }}">Team</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a href="{{ route('portfolio_user') }}" class="nav-link {{ request()->is('portfolio_user') ? 'active' : '' }}">Portfolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('pricing') }}" class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Pricing</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link "> News <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('blog-full') }}" class="nav-link {{ request()->is('blog-full') ? 'active' : '' }}">Blog Full</a>
                                        </li>
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
    @include('footer')
    <div class="copyright-conts v2">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-6">
                    <p>2023 © All rights reserved by Hag Web</p>
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
    @include('layout.underscript')
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ $error }}',
    });
    </script>
    @endforeach

    @endif

    @if (session()->get('error'))
    <script>
        iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('error') }}',
    });
    </script>
    @endif

    @if (session()->get('succes'))
    <script>
        iziToast.success({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('succes') }}',
    });
    </script>
    @endif
</body>
</html>
