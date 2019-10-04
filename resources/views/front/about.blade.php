@extends('layouts.frontlayout.front_design')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>About Us</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->
<div class="welcome-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                    <header class="entry-header">
                        <h2 class="entry-title">Welcome to Mikiundu CBO</h2>
                    </header><!-- .entry-header -->
                    <div class="entry-content mt-5">
                        <p>We are a community based organization established by the locals of Mikiundu area with a vision of putting resources and skills together to better our community and beyond.
                            we currently offer different services to our members in various areas like:
                        </p>
                        <ul>
                            <li><h2>Agriculture</h2>
                                <p>Our aim is to ensure food sustainability within our community and beyond 
                                    We thus offer different agriculture based services to our members on different agricultural sector like: </p>
                                <ol>
                                    <li>DAIRY FARMING</li>
                                    <li>FISH FARMING</li>
                                    <li>PIG KEEPING</li>
                                    <li>POULTRY FARMING</li>
                                    <li>CROP FARMING</li>
                                    <li>HORTICULTURE</li>
                                </ol>
                                <p> The services we offer to them includes Veterinary, Technical know how, Market for their products,Provision of tool and raw materials</p>                      
                            </li>
                            <li><h2>Health</h2>
                                <p>Our vision is to partner with the local government and other government entities to be able to offer free health services to our members and members from around the CBO.
                                    This we shall achieve through the provision of services like:</p>
                                <ol>
                                    <li>Life insurance</li>
                                    <li>CBO insurance cover to members</li>
                                    <li>Free training to community members on how to prevent diseases </li>
                                    <li>Weekly distribution of drugs</li>
                                </ol>
                            </li>
                            <li><h2>Environmental conservation</h2>
                                <p>As a measure of keeping our community healthy and productive, we offer various environmental conservation services like:</p>
                                <ol>
                                    <li>Afforestation</li>
                                    <li>Collection and recycling of non-biodegradable waste</li>
                                    <li>Control of soil erosion</li>
                                    <li>Provision of alternate source of fuel to community members so as to limit on charcoal burning and usage</li>
                                </ol>
                            </li>
                            <li><h2>Members empowerment</h2>
                                <p>We strive to empower different people within and around the CBO among the group of people that we empower is:</p>
                                <ol>
                                    <li>Elderly</li>
                                    <li>Marginalized Groups</li>
                                    <li>Youths</li>
                                </ol>
                                <p>We provide, training, education covers and also provide subsidized basic needs</p>
                            </li>
                            <li><h2>Catering</h2>
                                <p>We provide tents, chairs, cooking utensils, complete public address system and lighting system to enable trainings and community sensitization</p></li>
                        </ul>       
                    </div><!-- .entry-content -->
                </div><!-- .welcome-content -->
                
            </div><!-- .col -->

            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img src="{{asset('images/front_end/welcome.jpg')}}" alt="welcome">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->
<div class="about-stats">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">

                <div class="circular-progress-bar">
                    <div class="circle" id="loader_1">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>

                    <h3 class="entry-title">Hard Work</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_2">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>

                    <h3 class="entry-title">Pure Love</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_3">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>

                    <h3 class="entry-title">Smart Ideas</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_4">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>

                    <h3 class="entry-title">Good Decisions</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="testimonial-cont">
                    <div class="entry-content">
                        <p>We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</p>
                    </div>

                    <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                        <img src="{{asset('images/front_end/testimonial-1.jpg')}}" alt="">

                        <h4>Maria Williams, <span>Volunteer</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
                <div class="testimonial-cont">
                    <div class="entry-content">
                        <p>We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</p>
                    </div>

                    <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                        <img src="{{asset('images/front_end/testimonial-2.jpg')}}" alt="">

                        <h4>Cristian James, <span>Volunteer</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="help-us">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                <h2>Help us so we can help others</h2>

                <a class="btn orange-border" href="#">Donate now</a>
            </div>
        </div>
    </div>
</div>
@endsection