<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="{{asset('images/favicon.ico')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('css/touchTouch.css')}}">
    <link rel="stylesheet" href="{{asset('css/camera.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.1.1.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/superfish.js')}}"></script>
    <script src="{{asset('js/jquery.equalheights.js')}}"></script>
    <script src="{{asset('mobilemenu.js')}}js/jquery."></script>
    <script src="{{asset('js/tmStickUp.js')}}"></script>
    <script src="{{asset('js/jquery.ui.totop.js')}}"></script>
    <script src="{{asset('js/touchTouch.jquery.js')}}"></script>
    <script src="{{asset('js/camera.js')}}"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>
    <!--<![endif]-->
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#camera_wrap').camera({
                loader: false,
                pagination: false ,
                minHeight: '400',
                thumbnails: true,
                height: '46.32478632478632%',
                caption: false,
                navigation: false,
                fx: 'mosaic'
            });
            $('.gallery .gall_item').touchTouch();
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="{{asset('http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode')}}">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <link rel="stylesheet" media="screen" href="{{asset('css/ie.css')}}">
    <![endif]-->
</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<div class="main">
    <header>
        <div class="container_12">
            <div class="grid_12">
                <h1 class="logo">
                    <a href="{{asset('/')}}">HipHop 2020 Tour<span>MOVE YOUR BODY!!! WIN!!!</span>
                    </a>
                </h1>
            </div>
            <div class="clear"></div>
        </div>
    </header>