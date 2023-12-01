<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="DeveloperSmart.xyz">
    <meta name="author" content="">
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
