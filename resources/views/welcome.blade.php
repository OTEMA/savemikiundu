@extends('layouts.frontlayout.front_design')
@section('content')
<!--hero slider-->
<div class="swiper-container hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide hero-content-wrap">
            <img src="{{asset('images/front_end/hero.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Agriculture</h1>
                                <h4>Ensuring food sustainability</h4>
                            </header><!-- .entry-header -->
                            <div class="entry-content mt-4">
                                <p>Our aim is to ensure food sustainability within our community and beyond through training members on Dairy,Fish,Poultry and Crop farming </p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <!--a href="#" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="#" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
        <div class="swiper-slide hero-content-wrap">
            <img src="{{asset('images/front_end/hero_1.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Health</h1>
                                <h4>Health is wealth</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>We provide a non profitable health system where patients within the CBO get treatment free of charge</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <!--a href="#" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="#" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
        <div class="swiper-slide hero-content-wrap">
            <img src="{{asset('images/front_end/hero_2.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Environment</h1>
                                <h4>To be healthy Live in a clean environment</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>We engage ourselves in environmental conservancy activities such as Afforestation, controlling erosion collection and recycling of non-biodegradable litters</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <!--a href="#" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="#" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
        <div class="swiper-slide hero-content-wrap">
            <img src="{{asset('images/front_end/hero_3.jpg')}}" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Empowerment</h1>
                                <h4>Ensuring continuity and sustainability</h4>
                            </header><!-- .entry-header -->
                            <div class="entry-content mt-4">
                                <p>We strive to offer empowerment and support to the needy within the CBO such as the youth, elderly and the marginalized.</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <!--a href="#" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="#" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
        <div class="swiper-slide hero-content-wrap">
            <img src="{{asset('images/front_end/hero_4.jpg')}}" alt="">
            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Catering</h1>
                                <h4>A satisfied body is a healthy body</h4>
                            </header><!-- .entry-header -->
                            <div class="entry-content mt-4">
                                <p>We provide complete catering services such as tents,chairs,utensils, complete public address system etc.</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <!--a href="#" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="#" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
    </div><!-- .swiper-wrapper -->
    <div class="pagination-wrap position-absolute w-100">
        <div class="container">
            <div class="swiper-pagination"></div>
        </div><!-- .container -->
    </div><!-- .pagination-wrap -->
    <!-- Add Arrows -->
    <div class="swiper-button-next flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
    </div>
    <div class="swiper-button-prev flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
    </div>
</div>
<!-- /hero-slider -->
<!-- home-page-icon-boxes -->
<div class="home-page-icon-boxes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 mt-4 mt-lg-0">
                <div class="icon-box active">
                    <figure class="d-flex justify-content-center">
                        <img src="{{asset('images/front_end/hands-gray.png')}}" alt="">
                        <img src="{{asset('images/front_end/hands-white.png')}}" alt="">
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Become a Volunteer</h3>
                    </header>

                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                        <a href="" class="btn">Join us</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <img src="{{asset('images/front_end/donation-gray.png')}}" alt="">
                        <img src="{{asset('images/front_end/donation-white.png')}}" alt="">
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Donate to our noble course</h3>
                    </header>

                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                        <a href="" class="btn">Donate now</a>
                    </div>
                </div>
            </div>


        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- /home-page-icon-boxes -->
<!-- home-page-icon-boxes -->
<div class="home-page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                    <header class="entry-header">
                        <h2 class="entry-title">Who we are</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content mt-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.</p>
                    </div><!-- .entry-content -->

                    <div class="entry-footer mt-5">
                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                    </div><!-- .entry-footer -->
                </div><!-- .welcome-content -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                <img src="{{asset('images/front_end/welcome.jpg')}}" alt="welcome">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- /home-page-icon-boxes -->
<!-- .home-page-events -->
<div class="home-page-events">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="upcoming-events">
                    <div class="section-heading">
                        <h2 class="entry-title">Upcoming Events</h2>
                    </div><!-- .section-heading -->

                    <div class="event-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{asset('images/front_end/event-1.jpg')}}" alt="">
                        </figure>

                        <div class="event-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                <div class="posted-date">
                                    <a href="#">Aug 25, 2018 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Ball Room New York</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer">
                                <a href="#">Read More</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-wrap -->

                    <div class="event-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{asset('images/front_end/event-2.jpg')}}" alt="">
                        </figure>

                        <div class="event-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                <div class="posted-date">
                                    <a href="#">Aug 25, 2018 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Ball Room New York</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer">
                                <a href="#">Read More</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-wrap -->

                    <div class="event-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{asset('images/front_end/event-3.jpg')}}" alt="">
                        </figure>

                        <div class="event-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>

                                <div class="posted-date">
                                    <a href="#">Aug 25, 2018 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Ball Room New York</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer">
                                <a href="#">Read More</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-wrap -->
                </div><!-- .upcoming-events -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="featured-cause">
                    <div class="section-heading">
                        <h2 class="entry-title">Featured Cause</h2>
                    </div><!-- .section-heading -->

                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{asset('images/front_end/featured-causes.jpg')}}" alt="">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>

                                <div class="posted-date">
                                    <a href="#">Aug 25, 2018 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Ball Room New York</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                            <div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->

                                <span class="fill" data-percentage="83"></span>
                            </div><!-- .fund-raised-bar -->

                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Raised: $56 880
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    Goal: $70 000
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->
                </div><!-- .featured-cause -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- /home-page-events -->
<!-- .our-causes -->
<div class="our-causes">
    <div class="container">
        <div class="row">
            <div class="coL-12">
                <div class="section-heading">
                    <h2 class="entry-title">Our Causes</h2>
                </div><!-- .section-heading -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="swiper-container causes-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{asset('images/front_end/cause-1.jpg')}}" alt="">

                                    <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Agriculture</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-1 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="83"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Done: 56 880
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Goal: 70 000
                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{asset('images/front_end/cause-2.jpg')}}" alt="">

                                    <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Health</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-2 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="70"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">

                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">

                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{asset('images/front_end/cause-3.jpg')}}" alt="">

                                    <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Environment</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-3 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="83"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Planted: 56 880
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Goal: 70 000
                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{asset('images/front_end/cause-4.jpg')}}" alt="">

                                    <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Empowerment</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-4 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="83"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Empowered: 56 880
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Goal: 70 000
                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->

                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{asset('images/front_end/cause-5.jpg')}}" alt="">

                                    <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Catering</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-5 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="70"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->
                    </div><!-- .swiper-wrapper -->

                </div><!-- .swiper-container -->

                <!-- Add Arrows -->
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                </div>

                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- /our-causes -->
<!-- .our-causes -->
<div class="home-page-limestone">
    <div class="container">
        <div class="row align-items-end">
            <div class="coL-12 col-lg-6">
                <div class="section-heading">
                    <h2 class="entry-title">We love to help everyone who has a problem in the world. We have just started with our community.</h2>

                    <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                </div><!-- .section-heading -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="milestones d-flex flex-wrap justify-content-between">
                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('images/front_end/teamwork.png')}}" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="120" data-speed="2000"></div>
                                <div class="counter-k">K</div>
                            </div>

                            <h3 class="entry-title">Children helped</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('images/front_end/donation.png')}}" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="79" data-speed="2000"></div>
                            </div>

                            <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('images/front_end/dove.png')}}" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="253" data-speed="2000"></div>
                            </div>

                            <h3 class="entry-title">Volunteers</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->
                </div><!-- .milestones -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- /our-causes -->
@endsection