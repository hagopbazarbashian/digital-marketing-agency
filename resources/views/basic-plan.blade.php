@extends('layout.app')
@section('main_content')
<!--products page wrap start-->
<section class="products-wrap-pg px-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="row g-4">

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
                        <h1 class="text-1">What type of website do you want?</h1>
                        <div class="products-all-results">
                            <div class="d-flex justify-content-between">
                                @foreach ($pages as $key=>$page)
                                <div class="col-md-6 col-lg-4">
                                        {{-- <div class="img">
                                            <img class="prd" src="{{asset('/page//'.$page->image)}}" alt="">
                                        </div> --}}
                                        <i class="{{ $page->image }}" aria-hidden="true"></i>

                                        {{-- <form action="{{route('store.data')}}" method="post">
                                            @csrf
                                            <div class="cont">
                                                <input type="hidden" name="name" value="{{$page->name}}">
                                                <input type="hidden" name="id" value="{{$page->id}}">
                                                <h3><a href="#">{{$page->name}}</a></h3>
                                                <p>Free</p>
                                                <button type="submit" class="add_cart"><i class="fa fa-pencil-square-o"></i>Start Now</button>
                                            </div>
                                        </form> --}}
                                   <!--/.custom-product-wrap-->
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
@endsection
