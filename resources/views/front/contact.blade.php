@extends('layouts.frontlayout.front_design')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contact</h1>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->
<div class="contact-page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="entry-content">
                    <h2>Get In touch with us</h2>
                    <p>We are always open to suggestions and ideas feel free to talk to us if you have any ideas that would help us make our community better.<br>
                        You can visit us in our office, give us a call or better still leave us a note by filling the form bellow</p>
                    <ul class="contact-social d-flex flex-wrap align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <ul class="contact-info p-0">
                        <li><i class="fa fa-phone"></i><span>+254 715 509 377 / +254 710 197 271 / +254 723 280 882</span></li>
                        <li><i class="fa fa-envelope"></i><span>info@savemikiundu.org</span></li>
                        <li><i class="fa fa-map-marker"></i><span>Roo Bay sindo, P.O. Box 36-40308 Sindo Homabay - Kenya</span></li>
                    </ul>
                </div>
            </div><!-- .col -->
            <div class="col-12 col-lg-7">
                <form class="contact-form" method="post" action="{{url('contact')}}">@csrf
                    <input type="text" name="c_name" placeholder="Name" required>
                    <input type="email" name="c_email" placeholder="Email" required>
                    <textarea rows="15" cols="6" name="c_message" placeholder="Messages" required></textarea>
                    <span>
                        <input class="btn gradient-bg" type="submit" value="Contact us">
                    </span>
                </form><!-- .contact-form -->
            </div><!-- .col -->
            <div class="col-12">
                <div class="contact-gmap embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180549.0079888355!2d34.02755961181332!3d-0.5895339722831362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d4de31848cacdf%3A0xc09aa853482ca3d2!2sSindo!5e0!3m2!1sen!2ske!4v1572364504043!5m2!1sen!2ske" class="embed-responsive-item" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div>
@endsection