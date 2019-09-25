@extends('layouts.front.contact')
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, conse ctetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Integer accu msan sodales odio, id tempus velit ullamc.</p>
                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+45 677 8993000 223</span></li>
                            <li><i class="fa fa-envelope"></i><span>office@template.com</span></li>
                            <li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-lg-7">
                    <form class="contact-form">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <textarea rows="15" cols="6" placeholder="Messages"></textarea>
                        <span>
                            <input class="btn gradient-bg" type="submit" value="Contact us">
                        </span>
                    </form><!-- .contact-form -->
                </div><!-- .col -->
                <div class="col-12">
                    <div class="contact-gmap">
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=usa&key=AIzaSyC2LvnNLzWxHgFm_XfpFG9wHUuyEj6rXSs" allowfullscreen></iframe>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    @endsection