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
                                        <form action="{{route('store.data')}}" method="post">
                                            @csrf
                                            <div class="cont">
                                                <input type="hidden" name="name" value="{{$page->name}}">
                                                <input type="hidden" name="id" value="{{$page->id}}">
                                                <h3><a href="#">{{$page->name}}</a></h3>
                                                <button type="submit" class="add_cart"><i class="fa fa-pencil-square-o"></i>Start Now</button>
                                            </div>
                                        </form>
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
