<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="@if(app()->getLocale() == 'ar') rtl @else ltr @endif">

<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- Title -->
    <title>Mo3allemy</title>

    <!-- Favicon -->
    <link href="{{asset('app-assets/images/logofav.png')}}" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="{{asset('app-assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @if(app()->getLocale() == 'ar')

        <!-- Fonts -->
        <link href="{{asset('app-assets/cssRtl/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Animation-->
        <link href="{{asset('app-assets/cssRtl/aos.css')}}" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="{{asset('app-assets/cssRtl/mmenu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('app-assets/cssRtl/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="{{asset('app-assets/cssRtl/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('app-assets/cssRtl/style.css')}}" rel="stylesheet" type="text/css" />

    @else

        <!-- Fonts -->
        <link href="{{asset('app-assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Animation-->
        <link href="{{asset('app-assets/css/aos.css')}}" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="{{asset('app-assets/css/mmenu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('app-assets/css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="{{asset('app-assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('app-assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    @endif

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('app-assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('app-assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

@yield('content')

@include('layouts.footer')

<!-- jQuery Latest Version 1.x -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<!-- jQuery UI -->
<script src="{{asset('app-assets/js/jquery-ui.min.js')}}"></script>

<!-- jQuery Easing -->
<script src="{{asset('app-assets/js/jquery.easing.1.3.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('app-assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Mobile Menu -->
<script src="{{asset('app-assets/js/mmenu.min.js')}}"></script>

<!-- Harvey - State manager for media queries -->
<script src="{{asset('app-assets/js/harvey.min.js')}}"></script>

<!-- Bootstrap Dragable Carousel -->
<script src="{{asset('app-assets/js/touchSwipe.js')}}"></script>

<!-- UI Animation -->
<script src="{{asset('app-assets/js/aos.js')}}"></script>
<script src="{{asset('app-assets/js/highlight.min.js')}}"></script>

<!-- Waypoints - Load Elements on View -->
<script src="{{asset('app-assets/js/waypoints.min.js')}}"></script>

<!-- Facts Counter -->
<script src="{{asset('app-assets/js/facts.counter.min.js')}}"></script>

<!-- MixItUp - Category Filter -->
<script src="{{asset('app-assets/js/mixitup.min.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('app-assets/js/owl.carousel.min.js')}}"></script>

<!-- Accordion -->
<script src="{{asset('app-assets/js/accordion.min.js')}}"></script>

<!-- Masonry -->
<script src="{{asset('app-assets/js/masonry.min.js')}}"></script>

<!-- Carousel Swipe -->
<script src="{{asset('app-assets/js/carousel.swipe.min.js')}}"></script>

<!-- Testimonial Home Page V3 -->
<script src="{{asset('app-assets/js/card-slider-min.js')}}"></script>

<!-- Custom Scripts -->
<script src="{{asset('app-assets/js/main.js')}}"></script>

@stack('scripts')

</body>

</html>
