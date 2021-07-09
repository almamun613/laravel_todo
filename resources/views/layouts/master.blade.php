<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Groovin one page bootstrap template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- styles -->
    <link rel="stylesheet" href="{{asset('assets/css/fancybox/jquery.fancybox.css')}}">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-theme.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/slippry.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/color/default.css')}}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{asset('http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
    <![endif]-->
{{--
    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
--}}
    @stack('css')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')
</body>
</html>
