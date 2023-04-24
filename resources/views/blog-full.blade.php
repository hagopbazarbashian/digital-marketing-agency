@extends('layout.app')
@section('main_content')
 <!--page banner start-->
 <div class="page-banner-brd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner-brd-text text-center">
                    <h1>Blog Standard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Standard</li>
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

<!--blog standard start-->
<div class="blog-standard-wrap px-120">
    <div class="container">
        <div class="row g-4 gy-5">
            <div class="col-lg-8">
                <div class="row gy-5">
                    <div class="col-12">
                        <div class="single-blog-inner v3 full">
                            <div class="imgs">
                                <img src="img/blog/blog-full1.jpg" alt="">
                                <a href="{{ route('blog-details') }}" class="single-links">hidden link</a>
                            </div>
                            <div class="conts">
                                <ul class="meta">
                                    <li><img src="img/icons/tags.svg" alt=""><span>Business Planning</span></li>
                                    <li><img src="img/icons/messages.svg" alt=""> <span>22</span></li>
                                    <li><img src="img/icons/eye.svg" alt=""> <span>120 Views</span></li>
                                </ul>
                                <h2><a href="{{ route('blog-details') }}">Businesswoman leader in modern office with businesspeople workin</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but as the majoritsy have suffered alteration in some form, by injected humour, or randomised words which don't look evens slightly believable.</p>
                                <div class="d-flex align-items-center author">
                                    <div class="d-flex align-items-center me-5">
                                        <div class="flex-grow-0">
                                            <img src="img/testi3.jpg" alt="">
                                        </div>
                                        <div class="flex-shrink-1">
                                            <p>by Kristin</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="read-more">Read More <span><i class='bx bx-arrow-back bx-rotate-180' ></i></span></a>
                                </div>
                            </div>
                        </div><!--/.single-blog-inner-->
                    </div>
                    <div class="col-12">
                        <div class="single-blog-inner v3 full">
                            <div class="imgs">
                                <img src="img/blog/blog-full2.jpg" alt="">
                                <a href="{{ route('blog-details') }}" class="single-links">hidden link</a>
                            </div>
                            <div class="conts">
                                <ul class="meta">
                                    <li><img src="img/icons/tags.svg" alt=""><span>Business Planning</span></li>
                                    <li><img src="img/icons/messages.svg" alt=""> <span>22</span></li>
                                    <li><img src="img/icons/eye.svg" alt=""> <span>120 Views</span></li>
                                </ul>
                                <h2><a href="{{ route('blog-details') }}">Business team standing near the office window the of teamwork</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but as the majoritsy have suffered alteration in some form, by injected humour, or randomised words which don't look evens slightly believable.</p>
                                <div class="d-flex align-items-center author">
                                    <div class="d-flex align-items-center me-5">
                                        <div class="flex-grow-0">
                                            <img src="img/testi3.jpg" alt="">
                                        </div>
                                        <div class="flex-shrink-1">
                                            <p>by Kristin</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="read-more">Read More <span><i class='bx bx-arrow-back bx-rotate-180' ></i></span></a>
                                </div>
                            </div>
                        </div><!--/.single-blog-inner-->
                    </div>
                    <div class="col-12">
                        <div class="single-blog-inner v3 full">
                            <div class="imgs">
                                <img src="img/blog/blog-full3.jpg" alt="">
                                <a href="{{ route('blog-details') }}" class="single-links">hidden link</a>
                            </div>
                            <div class="conts">
                                <ul class="meta">
                                    <li><img src="img/icons/tags.svg" alt=""><span>Business Planning</span></li>
                                    <li><img src="img/icons/messages.svg" alt=""> <span>22</span></li>
                                    <li><img src="img/icons/eye.svg" alt=""> <span>120 Views</span></li>
                                </ul>
                                <h2><a href="{{ route('blog-details') }}">Group of people working out business plan successful in an office</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but as the majoritsy have suffered alteration in some form, by injected humour, or randomised words which don't look evens slightly believable.</p>
                                <div class="d-flex align-items-center author">
                                    <div class="d-flex align-items-center me-5">
                                        <div class="flex-grow-0">
                                            <img src="img/testi3.jpg" alt="">
                                        </div>
                                        <div class="flex-shrink-1">
                                            <p>by Kristin</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="read-more">Read More <span><i class='bx bx-arrow-back bx-rotate-180' ></i></span></a>
                                </div>
                            </div>
                        </div><!--/.single-blog-inner-->
                    </div>
                    <div class="col-12">
                        <div class="single-blog-inner v3 full">
                            <div class="imgs">
                                <img src="img/blog/blog-full4.jpg" alt="">
                                <a href="{{ route('blog-details') }}" class="single-links">hidden link</a>
                            </div>
                            <div class="conts">
                                <ul class="meta">
                                    <li><img src="img/icons/tags.svg" alt=""><span>Business Planning</span></li>
                                    <li><img src="img/icons/messages.svg" alt=""> <span>22</span></li>
                                    <li><img src="img/icons/eye.svg" alt=""> <span>120 Views</span></li>
                                </ul>
                                <h2><a href="{{ route('blog-details') }}">Close up on young business person doing collaborative lnternship</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but as the majoritsy have suffered alteration in some form, by injected humour, or randomised words which don't look evens slightly believable.</p>
                                <div class="d-flex align-items-center author">
                                    <div class="d-flex align-items-center me-5">
                                        <div class="flex-grow-0">
                                            <img src="img/testi3.jpg" alt="">
                                        </div>
                                        <div class="flex-shrink-1">
                                            <p>by Kristin</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="read-more">Read More <span><i class='bx bx-arrow-back bx-rotate-180' ></i></span></a>
                                </div>
                            </div>
                        </div><!--/.single-blog-inner-->
                    </div>
                    <div class="col-12">
                        <div class="single-blog-inner v3 full">
                            <div class="imgs">
                                <img src="img/blog/blog-full5.jpg" alt="">
                                <a href="{{ route('blog-details') }}" class="single-links">hidden link</a>
                            </div>
                            <div class="conts">
                                <ul class="meta">
                                    <li><img src="img/icons/tags.svg" alt=""><span>Business Planning</span></li>
                                    <li><img src="img/icons/messages.svg" alt=""> <span>22</span></li>
                                    <li><img src="img/icons/eye.svg" alt=""> <span>120 Views</span></li>
                                </ul>
                                <h2><a href="{{ route('blog-details') }}">Close up on young business person doing collaborative lnternship</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but as the majoritsy have suffered alteration in some form, by injected humour, or randomised words which don't look evens slightly believable.</p>
                                <div class="d-flex align-items-center author">
                                    <div class="d-flex align-items-center me-5">
                                        <div class="flex-grow-0">
                                            <img src="img/testi3.jpg" alt="">
                                        </div>
                                        <div class="flex-shrink-1">
                                            <p>by Kristin</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('blog-details') }}" class="read-more">Read More <span><i class='bx bx-arrow-back bx-rotate-180' ></i></span></a>
                                </div>
                            </div>
                        </div><!--/.single-blog-inner-->
                    </div>
                </div>
                <nav class="mt-5">
                    <ul class="pagination justify-content-start flex-wrap blog">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true"><i class="bx bx-chevron-left"></i></span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link active" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true"><i class="bx bx-chevron-right"></i></span>
                        </a>
                      </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar-wrap">
                    <div class="product-search-filter product-filter-single">
                        <h2>Search</h2>
                        <form>
                            <div class="frm-group">
                                <input type="search" class="form-control" placeholder="Search Product">
                                <button type="submit" class="submit_btn"><i class="bx bx-search"></i></button>
                            </div>
                        </form>
                    </div><!--/.product-filter-single-->
                    <div class="category product-filter-single">
                        <h2>Categorys</h2>
                        <ul>
                            <li><a href="#">
                                <span>Business Consulting</span>
                                <span>(05)</span>
                            </a></li>
                            <li><a href="#">
                                <span>Financial Investment</span>
                                <span>(07)</span>
                            </a></li>
                            <li><a href="#">
                                <span>IT Consultations</span>
                                <span>(03)</span>
                            </a></li>
                            <li><a href="#">
                                <span>Digital Analytics</span>
                                <span>(04)</span>
                            </a></li>
                            <li><a href="#">
                                <span>Payment Processing</span>
                                <span>(12)</span>
                            </a></li>
                            <li><a href="#">
                                <span>Software Solutions</span>
                                <span>(02)</span>
                            </a></li>
                        </ul>
                    </div><!--/.product-filter-single-->
                    <div class="recent product-filter-single">
                        <h2>Recent News</h2>
                        <div class="r-posts">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-0">
                                    <img src="img/blog/blog1.jpg" alt="">
                                </div>
                                <div class="flex-shrink-1">
                                    <h5><a href="#">Successful business partners having a meetin</a></h5>
                                    <p><i class='bx bx-calendar' ></i> 27 oct 2022</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-0">
                                    <img src="img/blog/blog2.jpg" alt="">
                                </div>
                                <div class="flex-shrink-1">
                                    <h5><a href="#">Creative designer project our discuss presentation client</a></h5>
                                    <p><i class='bx bx-calendar' ></i> 27 oct 2022</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center"> 
                                <div class="flex-grow-0">
                                    <img src="img/blog/blog3.jpg" alt="">
                                </div>
                                <div class="flex-shrink-1">
                                    <h5><a href="#">Front view of is businessman with colorful cones</a></h5>
                                    <p><i class='bx bx-calendar' ></i> 27 oct 2022</p>
                                </div>
                            </div>
                        </div>
                    </div><!--/.product-filter-single-->
                    <div class="tags product-filter-single">
                        <h2>Popular Tags</h2>
                        <ul>
                            <li><a href="#">Agency</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Banking</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Digital</a></li>
                            <li><a href="#">Consulting</a></li>
                        </ul>
                    </div><!--/.product-filter-single-->
                    <div class="futures product-filter-single">
                        <h2>Need Help?</h2>
                        <div class="content-inner">
                            <h3>Help to Create Great Business Agency Future</h3>
                            <p>Sit amet consectetur adipiscing elseds do eius mod tempor incididunt</p>
                            <a href="#" class="btn btn-default">Contact Us</a>
                        </div>
                    </div><!--/.product-filter-single-->
                </div><!--/.blog-sidebar-wrap-->
            </div>
        </div>
    </div><!--/.container-->
</div>
<!--blog standard end-->
@endsection