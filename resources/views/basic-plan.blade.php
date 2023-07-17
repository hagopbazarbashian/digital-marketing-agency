@extends('layout.app')
@section('main_content')
<!--products page wrap start-->
<section class="products-wrap-pg px-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="row g-4">
                    <div class="col-lg-3 d-none d-lg-inline-block">
                        <div class="row g-4">
                            <div class="col-12">

                            </div>
                            {{-- <div class="col-12">
                                <div class="product-filter-single">
                                    <h2>Availability</h2>
                                    <ul class="list-items-cat">
                                        <li>
                                            <input type="radio" name="product_cats">
                                            <label>
                                                <span>In Stock</span>
                                                <span class="count">(3563)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" name="product_cats">
                                            <label>
                                                <span>Out of Stock</span>
                                                <span class="count">(563)</span>
                                            </label>
                                        </li>

                                    </ul>
                                </div><!--/.product-filter-single-->
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="left-filter-btns d-flex align-items-center">
                                    <button class="btn d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#filter_collapse_id" aria-expanded="false" aria-controls="filter_collapse_id">
                                        <i class="fa-solid fa-sliders"></i> Filter
                                    </button>
                                    <p>Showing 1–16 of 17 results</p>
                                </div><!--/.left-filter-btns-->
                            </div>
                        </div>

                        <div class="products-all-results">
                            <div class="row g-4 ">
                                @if ($pages->count() > 0)
                                @foreach ($pages as $key=>$page)
                                <div class="col-md-6 col-lg-4">
                                    <div class="custom-product-wrap">
                                        <div class="img">
                                            <div class="left-badges">
                                                <span class="badge created">New</span>
                                                {{-- <span class="badge off">20%</span> --}}
                                            </div>
                                            <img class="prd" src="{{asset('/page'.$page->image)}}" alt="">
                                            <div class="reviews-btn">
                                                <span>Reviews (18)</span>
                                                <div class="d-flex reviews  justify-content-center">
                                                    <i class='bx bxs-star' ></i>
                                                    <i class='bx bxs-star' ></i>
                                                    <i class='bx bxs-star' ></i>
                                                    <i class='bx bxs-star' ></i>
                                                    <i class='bx bxs-star' ></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <h3><a href="shop-details.html">{{$page->name}}</a></h3>
                                            <p>$2000</p>
                                            <button type="button" class="add_cart"><i class="bx bx-shopping-bag"></i> Add to Cart</button>
                                        </div>
                                    </div><!--/.custom-product-wrap-->
                                </div>
                                @endforeach
                                @else
                                <div class="error-pg-sec px-120">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="inner-404 text-center">
                                                    <img src="img/404.png" alt="">
                                                    <div class="mt-50">
                                                        <h2>Oops! Page Not Found.</h2>
                                                        <p>The page you are looking for is not available or has been moved. Try a
                                                            different page or go to homepage with the button below.</p>
                                                        <a href="/" class="btn btn-default">Back to home</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--/.container-->
                                </div>
                                @endif
                            </div>
                        </div><!--/.products-all-results-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-fluid-->
</section>
<!--products page wrap end-->
@endsection
