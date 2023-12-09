<!-- main nav start -->
<style>
.right-content-top li a i.bxl-instagram {
   color: #e4405f; /* Customize the color as needed */
}
</style>
<header class="header-style-1">
    <div class="top_nav_soc">
       <div class="container">
          <div class="row">
             <div class="col-md-8 col-xl-8">
                <div class="left-content-top">
                   <ul>
                      <li class="d-none d-xl-inline-block">Welcome to DeveloperSmart.xyz Agency</li>
                      <li>
                         <a href="tel:+37455446061"><i class="bx bxs-phone"></i> +374 ( 55 ) 446061</a>
                      </li>
                      <li>
                         <a href="mailto:support@developsmart.xyz"><i class="bx bxs-envelope"></i>support@developsmart.xyz</a>
                      </li>
                   </ul>
                </div>
                <!--/.left-content-top-->
             </div>
             <div class="col-md-4 col-xl-4">
                <div class="right-content-top">
                   <ul>
                      <li>
                         <a href="#"><i class="bx bxl-facebook"></i></a>
                      </li>
                       <li>
                         <a href="https://instagram.com/developer_smart_2020?igshid=NGVhN2U2NjQ0Yg%3D%3D&utm_source=qr" target="_blank"><i class="bx bxl-instagram"></i></a>
                      </li>
                      {{-- <li>
                         <a href="#"><i class="bx bxl-linkedin"></i></a>
                      </li>
                      <li>
                         <a href="#"><i class="bx bxl-twitter"></i></a>
                      </li>
                      <li>
                         <a href="#"><i class="bx bxl-youtube"></i></a>
                      </li> --}}
                   </ul>
                </div>
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
                      <img src="{{asset('img/logo.png')}}" alt="image" />
                   </a>
                </div>
                <!--/.logo-->
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
                   <img src="{{asset('img/logo.png')}}" alt="image" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                   <ul class="navbar-nav m-auto">
                      <li class="nav-item">
                         <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                      </li>
                      <li class="nav-item">
                         <a href="#" class="nav-link"> Pages <i class="bx bx-chevron-down"></i> </a>
                         <ul class="dropdown-menu">
                            {{--
                            <li class="nav-item">
                               <a href="{{ url('team') }}" class="nav-link {{ request()->is('team') ? 'active' : '' }}">Team</a>
                            </li>
                            --}}
                            <li class="nav-item">
                               <a href="{{ route('portfolio_user') }}" class="nav-link {{ request()->is('portfolio_user') ? 'active' : '' }}">Portfolio</a>
                            </li>
                         </ul>
                      </li>

                      <li class="nav-item">
                         <a href="{{ url('contact') }}" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                      </li>
                   </ul>
                   <!--/.navbar-nav -->
                   <div class="others-options d-flex align-items-center">
                      <div class="option-item">
                         <a class="opt" href="#search"><i class="bx bx-search"></i></a>
                      </div>
                      <div class="option-item d-none d-xl-inline-block">
                         <a href="{{ route('add_website') }}" class="btn">Request a new website<i class="bx bx-right-arrow-alt"></i></a>
                      </div>
                   </div>
                   <!--/.others-options-->
                </div>
             </nav>
             <!--/.navbar-->
          </div>
       </div>
    </div>
 </header>
 <!-- /.navbar -->
 <!--popup search box-->
 <div id="search">
    <button type="button" class="close">×</button>
    <form>
       <input type="search" value="" placeholder="type keyword(s) here" />
       <button type="submit" class="btn btn-primary">Search</button>
    </form>
 </div>
 <!--popup search box-->
