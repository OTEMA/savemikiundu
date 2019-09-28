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
                                <a href="{{url('/about')}}" class="btn orange-border">Read More</a>
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
                                <!--a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="{{url('/about')}}" class="btn orange-border">Read More</a>
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
                                <a href="{{url('/about')}}" class="btn orange-border">Read More</a>
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
                                <!--a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="{{url('/about')}}" class="btn orange-border">Read More</a>
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
                                <!--a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Donate Now</a-->
                                <a href="{{url('/about')}}" class="btn orange-border">Read More</a>
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
                        <p>We would like your support in transforming our community. Your support will get us a long way into making A better Mikiundu and the world as a whole </p>
                        <a href="{{url('/contact')}}" class="btn">Join us</a>
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
                        <p>You can also support our transformation course by Donating to our course. You can donate the necessary stuff required to reach our goal, money or your skill in training or members etc </p>
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
                        <p>We are a community based organization established by the locals of mikiundu area with a vision of putting resources and skills together to better our community and beyond.<br>
                            <strong><u>Our Mission</u></strong> is to help eradicate hunger through the promotion of agricultural activities within and around our region, Eliminate poverty through provision of empowerment to the youth, elderly and other marginalized groups, 
                            Ensure an affordable health program by partnering with health service providers and the government...<br>
                            <strong><u>Our Vision</u></strong>Having a sustainable clean environment that can empower the society</p>
                    </div><!-- .entry-content -->

                    <div class="entry-footer mt-5">
                        <a href="{{url('/about')}}" class="btn gradient-bg mr-2">Read More</a>
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
                                <h3 class="entry-title w-100 m-0"><a href="#">No event yet</a></h3>

                                <div class="posted-date">
                                    <a href="#"> ---</a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">---</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">---</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer">
                                <a href="{{url('/about')}}">Read More</a>
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
                            <img src="{{asset('images/front_end/cause-1.jpg')}}" alt="">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Agriculture</a></h3>

                                <div class="posted-date">
                                    <a href="#">Sept 25, 2019 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Sindo</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Agriculture is the main source of our revenue. We would thus like to provide modern farming tools and training on how to protect the environment. We would greatly appreciate your support in acquiring the necessary materials like tractors, farming knowledge etc</p>
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

                                <span class="fill" data-percentage="3"></span>
                            </div><!-- .fund-raised-bar -->

                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Raised: 
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    Goal: 
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
                                        <a href="{{url('/about')}}" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Agriculture</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">Agriculture is the main source of our revenue. We would thus like to provide modern farming tools and training on how to protect the environment.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-1 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="3"></span>
                                        </div><!-- .fund-raised-bar -->
                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Done: 
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Goal: 
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
                                        <a href="{{url('/about')}}" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>
                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Health</a></h3>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <p class="m-0">We seek to provide a Non profitable health system in partnership with the government and the health service providers.This will ensure that patients within the CBO get treatment without being charged</p>
                                    </div><!-- .entry-content -->
                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-2 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="7"></span>
                                        </div><!-- .fund-raised-bar -->
                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Done: 
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Goal: 
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
                                        <a href="{{url('/about')}}" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>
                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Environment</a></h3>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <p class="m-0">A healthy environment is a productive environment. We therefore provide training to our members on how to manage waste. We also -...</p>
                                    </div><!-- .entry-content -->
                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-3 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->
                                            <span class="fill" data-percentage="8"></span>
                                        </div><!-- .fund-raised-bar -->
                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Trees Planted: 880
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
                                        <a href="{{url('/about')}}" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>
                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Empowerment</a></h3>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <p class="m-0">We provide empowerment to different people in our community through offering special training to marginalized groups, providing youths with education covers,entrepreneurship training and talent promotion ...</p>
                                    </div><!-- .entry-content -->
                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-4 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="8"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Empowered: 56
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
                                        <a href="{{url('/about')}}" class="btn gradient-bg mr-2">Read More</a>
                                    </div><!-- .figure-overlay -->
                                </figure>
                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">Catering</a></h3>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <p class="m-0">We provide tents, chairs, cooking utensils complete public address and lighting systems as a means of empowering our people</p>
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

                    <p class="mt-5">We believe that everyone deserves a helping hand in achieving their goals and that is what we are here for. Joining us and supporting us through your donations will go a long way into touching other people's lives </p>
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
                                <div class="start-counter" data-to="10" data-speed="2000"></div>
                                <div class="counter-k">K</div>
                            </div>

                            <h3 class="entry-title">Lives touched</h3><!-- entry-title -->
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

                            <h3 class="entry-title">Help granted</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('images/front_end/dove.png')}}" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="25" data-speed="2000"></div>
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