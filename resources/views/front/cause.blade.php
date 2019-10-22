@extends('layouts.frontlayout.front_design')
@section('content')
<div class="featured-cause">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="entry-title">Featured Cause</h2>
                </div><!-- .section-heading -->
            </div><!-- .col -->
        </div><!-- .row -->
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="cause-wrap d-flex flex-wrap justify-content-between">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/featured-causes.jpg')}}" alt="">
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>
                            <div class="posted-date">
                                <a href="#">Coming soon</a>
                            </div><!-- .posted-date -->
                            <div class="cats-links">
                                <a href="#">Coming soon</a>
                            </div><!-- .cats-links -->
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">Coming soon.</p>
                        </div><!-- .entry-content -->
                        <div class="entry-footer mt-5">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Subscribe </a>
                        </div><!-- .entry-footer -->
                    </div><!-- .cause-content-wrap -->
                    <div class="fund-raised w-100">
                        <div class="featured-fund-raised-bar barfiller">
                            <div class="tipWrap">
                                <span class="tip">Coming soon</span>
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
            </div><!-- .col -->
            <div class="col-12 col-lg-6">
                <div class="cause-wrap d-flex flex-wrap justify-content-between">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/eye-for.jpg')}}" alt="">
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Fundraiser for Kids</a></h3>
                            <div class="posted-date">
                                <a href="#">coming soon </a>
                            </div><!-- .posted-date -->
                            <div class="cats-links">
                                <a href="#">coming soon</a>
                            </div><!-- .cats-links -->
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">Coming soon.</p>
                        </div><!-- .entry-content -->
                        <div class="entry-footer mt-5">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Subscribe</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .cause-content-wrap -->
                    <div class="fund-raised w-100">
                        <div class="featured-fund-raised-bar barfiller">
                            <div class="tipWrap">
                                <span class="tip">Coming soon</span>
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
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .featured-cause -->

<div class="our-causes pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cause-wrap">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/cause-1.jpg')}}" alt="">
                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Join us on this cause</a>
                        </div><!-- .figure-overlay -->
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Agriculture</a></h3>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">Our aim is to ensure food sustainability within our community and beyond We thus offer different agriculture based services to our members on different agricultural sector like:
                                DAIRY FARMING,FISH FARMING,PIG KEEPING,POULTRY FARMING,CROP FARMING and HORTICULTURE
                                The services we offer to them includes Veterinary, Technical know how, Market for their products,Provision of tool and raw materials</p>
                        </div><!-- .entry-content -->
                        <div class="fund-raised w-100">
                            <div class="fund-raised-bar-1 barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->
                                <span class="fill" data-percentage="10"></span>
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
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cause-wrap">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/cause-2.jpg')}}" alt="">
                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Join us on this cause</a>
                        </div><!-- .figure-overlay -->
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Health</a></h3>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">Our vision is to partner with the local government and other government entities to be able to offer free health services to our members and members from around the CBO. 
                                This we shall achieve through the provision of services like: Life insurance,CBO insurance cover to members,
                                Free training to community members on how to prevent diseases and Weekly distribution of drugs</p>
                        </div><!-- .entry-content -->
                        <div class="fund-raised w-100">
                            <div class="fund-raised-bar-2 barfiller">
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
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cause-wrap">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/cause-3.jpg')}}" alt="">
                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Join us on this cause</a>
                        </div><!-- .figure-overlay -->
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Environment</a></h3>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">As a measure of keeping our community healthy and productive, we offer various environmental conservation services like:
                                Afforestation, Collection and recycling of non-biodegradable waste,Control of soil erosion and Provision of alternate source of fuel to community members so as to limit on charcoal burning and usage.</p>
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
                                    Done: 
                                </div><!-- .fund-raised-total -->
                                <div class="fund-raised-goal mt-4">
                                    Goal: 
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-content-wrap -->
                </div><!-- .cause-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->

<div class="highlighted-cause">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <div class="section-heading">
                    <h2 class="entry-title">We love to help all the children that have problems in the world. After several years we have many goals achieved.</h2>
                </div><!-- .section-heading -->
                <div class="entry-content">
                    <p>Children are the future. Any support we accord them is a development to our community</p>
                </div><!-- .entry-content -->
                <div class="fund-raised w-100 mt-5">
                    <div class="featured-fund-raised-bar barfiller">
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div><!-- .tipWrap -->
                        <span class="fill" data-percentage="8"></span>
                    </div><!-- .fund-raised-bar -->
                    <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                        <div class="fund-raised-total mt-4">
                        </div><!-- .fund-raised-total -->
                        <div class="fund-raised-goal mt-4">
                        </div><!-- .fund-raised-goal -->
                    </div><!-- .fund-raised-details -->
                </div><!-- .fund-raised -->
                <div class="entry-footer mt-5">
                    <a href="{{url('/contact')}}" class="btn gradient-bg">Donate Now</a>
                </div><!-- .entry-footer -->
            </div><!-- .col -->
            <div class="col-12 col-lg-5 order-1 order-lg-2">
                <img src="{{asset('images/front_end/oshomah.jpg')}}" alt="">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .highlighted-cause -->

<div class="our-causes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cause-wrap">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/cause-4.jpg')}}" alt="">
                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Join us on this cause</a>
                        </div><!-- .figure-overlay -->
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Empowerment</a></h3>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">We strive to empower different people within and around the CBO among the group of people that we empower is:
                                Elderly,Marginalized Groups and Youths.We provide, training, education covers and also provide subsidized basic needs.</p>
                        </div><!-- .entry-content -->
                        <div class="fund-raised w-100">
                            <div class="fund-raised-bar-1 barfiller">
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
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4">
                <div class="cause-wrap">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/cause-5.jpg')}}" alt="">
                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Join us on this cause</a>
                        </div><!-- .figure-overlay -->
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Catering</a></h3>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">We provide tents, chairs, cooking utensils, complete public address system and lighting system to enable trainings and community sensitization</p>
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
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4">
                <div class="cause-wrap">
                    <figure class="m-0">
                        <img src="{{asset('images/front_end/cause-6.jpg')}}" alt="">
                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                            <a href="{{url('/contact')}}" class="btn gradient-bg mr-2">Join us on this cause</a>
                        </div><!-- .figure-overlay -->
                    </figure>
                    <div class="cause-content-wrap">
                        <header class="entry-header d-flex flex-wrap align-items-center">
                            <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the children</a></h3>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="m-0">Children are the future. That is why we always strive to make their lives better. We provide water to schools as part of our program by sinking boreholes in schools and villages that way we ensure that none of our children walk long distances looking for water but rather can focus their energy in their studies</p>
                        </div><!-- .entry-content -->
                        <div class="fund-raised w-100">
                            <div class="fund-raised-bar-3 barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->
                                <span class="fill" data-percentage="5"></span>
                            </div><!-- .fund-raised-bar -->
                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Sunken: 0
                                </div><!-- .fund-raised-total -->
                                <div class="fund-raised-goal mt-4">
                                    Goal: 7000
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-content-wrap -->
                </div><!-- .cause-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->
@endsection