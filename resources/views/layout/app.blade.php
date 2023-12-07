<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="https://developsmart.xyz/">
    <meta name="theme-color" content="#ff8a00">
    <meta name="description" content="Developer Smart">
    <meta name="keywords" content="website , Mobile app , freewebsite , free">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('images/favicon_io/android-chrome-512x512.png') }}">
    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="{{asset('images/favicon_io/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon_io/android-chrome-512x512.png') }}" >
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon_io/android-chrome-192x192.png') }}" >
        
    <!-- Other meta tags and headers -->
    <meta property="og:title" content="Developer Smart">
    <meta property="og:description" content="Developer Smart agency that has been providing quality services for seven years. Founded in 2016, the company has established itself as a leader in the digital marketing industry, offering a wide range of services to help businesses enhance their online presence, generate leads, and increase sales.">
    <meta property="og:image" content="https://vakant.am/images/logo/1121dbe7-d174-4673-a2d0-19b4e017b9e4.jpg">
    <meta property="og:url" content="https://developsmart.xyz/">
    <meta property="og:type" content="website">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DeveloperSmart.xyz</title>
    @include('layout.style')
    
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--<div class="se-pre-con"></div> -->

    <!-- main nav start -->
     @include('layout.nav')
    <!-- /.navbar -->


    @yield('main_content')
    
    @include('footer')

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
