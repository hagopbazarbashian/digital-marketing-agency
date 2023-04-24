@extends('layout.app')
@section('main_content')
<!--service details start-->
<section class="service-details-sec px-120">
    <div class="container">
        <div class="row g-4 gy-5">
            <div class="col-lg-8">
                <div class="details-content-wraps">
                    <div class="srv-main-image">
                        <img src="img/service-details1100.jpg" alt="">
                    </div>
                    <div class="srv-txt">
                        <h2>Search Engine Optimization</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>
                    </div>
                    <div class="srv-provess">
                        <div class="row g-4">
                            <div class="col-lg-7">
                                <div class="process-img">
                                    <img src="img/srv-process1101.jpg" class="pr1" alt="">
                                    <img src="img/srv-process2102.jpg" class="pr2" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <h2>Our Service Process</h2>
                                <ul class="our-src">
                                    <li>
                                        <div class="icon"><img src="img/icons/sr-process1.png" alt=""></div>
                                        <h3>Creative Analysis</h3>
                                        <p>Creative analysis is important. It is common for marketers</p>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="img/icons/sr-process2.png" alt=""></div>
                                        <h3>Design & Scratches</h3>
                                        <p>Creative analysis is important. It is common for marketers</p>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="img/icons/sr-process3.png" alt=""></div>
                                        <h3>Development & Delivery  </h3>
                                        <p>Creative analysis is important. It is common for marketers</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.srv-provess-->
                    <div class="mt-50">
                        <h2>We Hope You Find What You are Looking for</h2>
                        <p class="mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>
                        <ul class="list-icons">
                            <li>Research beyond the business plan</li>
                            <li>Customer Oriented Program Daily</li>
                            <li>The ability to turnaround consulting</li>
                            <li>Customer engagement matters</li>
                        </ul>
                    </div>
                </div><!--/.details-content-wraps-->
            </div>
            <div class="col-lg-4">
                <div class="service-widget-right links">
                    <h2>Our All Service</h2>
                    <div class="btns">
                        <a href="#" class="btn">Search Engine Optimization <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                        <a href="#" class="btn">Web Design & Development <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                        <a href="#" class="btn">Email and Content Marketing <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                        <a href="#" class="btn">Social Media Network Marting <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                    </div>
                </div><!--/.service-widget-right-->
                <div class="service-widget-right forms mt-50">
                    <h2 class="text-white">Get a free quote</h2>
                    <form action="{{ route('send-info') }}" method="post">
                        @csrf
                        <input type="text" placeholder="Your Name" name="name" class="form-control" required>
                        <input type="email" placeholder="Your Email Address" name="email" class="form-control" required>
                        <textarea class="form-control" placeholder="Your Message" name="message" rows="4" required></textarea>
                        <button  class="btn btn-default">Send Message</button>
                    </form>
                </div>
                <div class="service-widget-right links mt-50">
                    <h2>Download</h2>
                    <div class="btns">
                        <a href="#" class="btn">Our Brochures 2023 <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                        <a href="#" class="btn">About Our Company <i class='bx bx-arrow-back bx-rotate-180' ></i></a>
                    </div>
                </div><!--/.service-widget-right-->
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--service details end-->
@endsection