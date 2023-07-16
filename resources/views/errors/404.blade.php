@extends('layout.app')
@section('main_content')
<!--404 start-->
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
<!--404 end-->
@endsection
