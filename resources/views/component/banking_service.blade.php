@extends('layouts.index')
@section('content')
 <!-- Page Banner Section -->
 <section class="page-banner">
        <div class="image-layer lazy-image" 
        data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Banking</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Banking</li>
            </ul>
        </div>

    </section>

    <!-- History Section -->
    

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Our Team</div>
                <h2>Banking Team</h2>
            </div>
            <div class="row">
                                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">Founder</div>
                            <h3>Rosalina D. William</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">CEO</div>
                            <h3>Velavos H. DesuJa</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">Developer</div>
                            <h3>Abdur Rahman J.</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Four -->
    <section class="services-section-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Features</div>
                <h2>Core Features</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-3.png')}}" alt=""></div>
                        <h2>Capital Market</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-21.png')}}" alt=""></div>
                        <h2>Finance Division</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-4.png')}}" alt=""></div>
                        <h2>Insurance & Planning</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-22.png')}}" alt=""></div>
                        <h2>Family Case</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-5.png')}}" alt=""></div>
                        <h2>Financial Strategy</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-23.png')}}" alt=""></div>
                        <h2>Financial Planning</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="sponsors-section">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-1.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-2.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-3.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-4.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-5.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-1.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-2.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-3.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-4.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-5.png')}}" alt=""></a></figure></div>
            </div>
        </div>
    </section>

@endsection