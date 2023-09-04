@extends('layout.app')
@section('main_content')
 <!--page banner start-->
 <div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
<!--contact us start-->
<div class="contact-us-pg px-120">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="inner-contact-pg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-content-con-pg">
                                <div class="sec-title">
                                    <h1>Contact With Us Build a Free Website or Online Store ...</h1>
                                    <p>Send us a message and we' ll respond as soon as possible</p>
                                </div>
                                <form action="{{ route('contact') }}"  method="post">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name*" name="name" class="form-control" >
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name*" name="last" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Email Address*" name="email" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" placeholder="Phone Number*" name="number" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="6"  placeholder="Your Message here" name="message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-default">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!--/.left-content-con-pg-->
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content-contact-pg">
                                <div class="tt">
                                    <h1>Need Any Help?</h1>
                                    <p>Call us or message and we' ll respond as soon as possible</p>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="single-con-dts">
                                            <div class="icon"><i class='bx bxs-phone' ></i></div>
                                            <h2>Phone</h2>
                                            <a href="tel:37455446061">+(375)55 4460 61</a>
                                            {{-- <a href="tel:5466546744">+(1)514 781 2513</a> --}}
                                        </div><!--/.single-con-dts-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-con-dts">
                                            <div class="icon"><i class='bx bxs-envelope' ></i></div>
                                            <h2>Email</h2>
                                            <a href="mailto:support@developsmart.xyz">support@developsmart.xyz</a>
                                            {{-- <a href="mailto:domaininfo@email.com">hagopbazarbasian@gmail.com</a> --}}
                                        </div><!--/.single-con-dts-->
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="single-con-dts">
                                            <div class="icon"><i class='bx bxs-map' ></i></div>
                                            <h2>Location</h2>
                                            <address>4517 Washington Ave. 32 King Street, MelbourneManchester, Road USA</address>
                                        </div><!--/.single-con-dts-->
                                    </div> --}}
                                </div>
                                <div class="illus">
                                    <img src="img/contact-illast100.png" alt="">
                                </div>
                            </div><!--/.right-content-contact-->
                        </div>
                    </div>
                </div><!--/.inner-contact-pg-->
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--contact us end-->
@endsection
