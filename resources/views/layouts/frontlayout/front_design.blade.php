<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SAVE MIKIUNDU | @yield('title')</title>
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/icon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('images/icon/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('images/icon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{asset('images/icon/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{asset('images/icon/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/front_end/bootstrap.min.css')}}">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{asset('css/front_end/font-awesome.min.css')}}">
        <!-- ElegantFonts CSS -->
        <link rel="stylesheet" href="{{asset('css/front_end/elegant-fonts.css')}}">
        <!-- themify-icons CSS -->
        <link rel="stylesheet" href="{{asset('css/front_end/themify-icons.css')}}">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('css/front_end/swiper.min.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/front_end/style.css')}}">
    </head>
    <body>
        @include('layouts.frontlayout.front_header')
        @yield('content')
        @include('layouts.frontlayout.front_footer')
        <script type='text/javascript' src='{{asset('js/front_end/jquery.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/jquery.collapsible.min.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/swiper.min.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/jquery.countdown.min.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/circle-progress.min.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/jquery.countTo.min.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/jquery.barfiller.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/front_end/custom.js')}}'></script>
    </body>
</html>