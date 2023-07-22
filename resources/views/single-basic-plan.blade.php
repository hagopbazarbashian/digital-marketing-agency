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
@endsection
