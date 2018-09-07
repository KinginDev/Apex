@extends('Frontend.layouts.app')

@section('content')
         
        <!-- start main wrapper   -->
        <main class="main-wrapper">

            <!-- start revolution slider section-->
           @include('Frontend.partials.slider')

            @include('Frontend.partials.about')
            <!-- end about section-->
            @include('Frontend.partials.services')
             <!-- start quote block-->
            @include('Frontend.partials.quote')
            <!-- end quote section -->
            <!-- start portfolio section-->
             @include('Frontend.partials.portfolio')
            <!-- end portfolio section-->
           
            <!-- start testimonial and client logo section -->
            @include('Frontend.partials.testimonials')
       
         
            <!-- end testimonial and client logo section -->

            <!-- start blog and newsletter section -->
            @include('Frontend.partials.blog')
            <!-- end blog and newsletter section -->
            @include('Frontend.partials.misc')

                <!-- start twitter slider section -->
                <section class="twitter-section twitter overflow-hidden">

                    <div class="bg-image twitter-bg" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)"></div>

                    <div class="overlay overlay-six">
                        <div class="section-common-space">
                            <div class="text-center">
                                <div class="twitter-thumb wow fadeInDown" data-wow-duration="1s">
                                    <i class="zmdi zmdi-twitter"></i>
                                </div>
                                <div class="slider-item tweets styled-paginantion colorsch-black" id="tweetSlider"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end twitter slider section -->

            </section>
            <!-- end pricing and twitter section -->

            <!-- start contact section -->
            <section id="contact" class="section-main contact devide-50 devide-bg">
                <div class="container">
                    <div class="row">

                        <!-- start contact left section/contact address -->
                        <div class="col-sm-6 contact-info-start">
                            <div class="section-common-space">
                                <h2 class="section-title">CONTACT US</h2>
                                <div class="contact-info">
                                   {{--  <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-home"></i></span>
                                        <address>1600 Amphitheatre Parkway, Mountain View, CA 94043, US</address>
                                    </div> --}}
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-email"></i></span>
                                        <address>info@apex-triangle.com</address>
                                    </div>
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-phone"></i></span>
                                        <address>support@apex-triangle.com</address>
                                    </div>
                                    <div class="clearfix ci-items">
                                        <span class="ci-icons"><i class="zmdi zmdi-globe"></i></span>
                                        <address>www.apex-triangle.com</address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end left contact section -->

                        <!-- start right contact section/contact form-->
                        <div class="col-sm-6 contact-form-start">
                            <div class="section-common-space">
                                <form id="contactForm" action="#" class="matx-form-valid contact-form">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" name="contactName" id="name" />
                                                <label class="mdl-textfield__label" for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" name="contactEmail" id="email" />
                                                <label class="mdl-textfield__label" for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mdl-textfield mdl-js-textfield">
                                                <input class="mdl-textfield__input" type="text" name="contactSubject" id="subject" />
                                                <label class="mdl-textfield__label" for="subject">Subject</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mdl-textfield mdl-js-textfield mdl-textarea">
                                                <textarea class="mdl-textfield__input" name="contactMessage" id="message" ></textarea>
                                                <label class="mdl-textfield__label" for="message">Message</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-left ">
                                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit" disabled>send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end right contact section -->
                    </div>
                </div>
                <!-- start map section -->
                <div class="section bg-image-class location-on-map">
                    <div class="overlay">
                        <div class="text-center map-content">
                            <div class="map-buttons">
                                <button type="button" id="map-open" class="btn-active btn btn-block btn-tranparent btn-animated from-top zmdi zmdi-chevron-down">
                                    <span>LOCATE US ON THE MAP</span>
                                </button>

                                <button type="button" id="map-close" class="btn btn-block btn-tranparent btn-animated from-bottom zmdi zmdi-chevron-up">
                                    <span>Close the map</span>
                                </button>
                            </div>
                            <div class="map-wrapper">
                              <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end map section -->
            </section>
            <!-- end contact section -->

        </main>
        <!-- end main wrapper   -->
@endsection