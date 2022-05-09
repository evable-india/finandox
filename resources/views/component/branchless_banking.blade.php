@extends('layouts.index')
@section('content')

<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>One App Many Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li class="active">Services</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->
<section class="careers-section" style="background-color: #FEFDF6;">
    <div class="auto-container">
        <div class="row">
            <h3 class="banking">Banking Services</h3><br><br>
            <h3 class="become">Become the most trusted Banker of your area</h3>
            <p class="text-justify">No working capital required. Offer uninterrupted banking services like cash withdrawal, money transfer, cash deposits, savings, insurance and loan from your shop. PayNearby is a PCI DSS and ISO 27001 certified company, which means transacting on the platform is very secure and has a time tested success ratio of more than 99.9%
            </p>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <img src="{{ asset('assets/images/service-images/banking-services.PNG')}}" alt="">
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <img src="{{ asset('assets/images/service-images/aeps-logo.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">AePS</span> <p>Help customers withdraw DBT, government relief funds and cash from their bank accounts using fingerprint with Aadhaar enabled Payment Services (AePS)
                        </p>

                        <img src="{{ asset('assets/images/service-images/micro-atm.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Micro ATM</span>
                        <p>Provide cash withdrawal services using debit cards of over 1000+ banks

                        </p>

                        <img src="{{ asset('assets/images/service-images/digi-transger.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Digi Smart Transfer</span>
                        <p>An industry first initiative that enables cash withdrawal and money transfer in one go and allows retailers to run a banking business without any wallet balance

                        </p>


                        <img src="{{ asset('assets/images/service-images/money-transfer.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Money Transfer</span>
                        <p>Take advantage of our time tested platform with 99.9% success rate to help customers send money from anywhere to anywhere within India, real time, 24*7. Customers use this service also to deposit cash into their accounts

                        </p>
                        <img src="{{ asset('assets/images/service-images/bachat-khata.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Bachat Khata</span>

                        <p>Bring banks nearby and help customers save securely for their dreams with Bachat Khata


                        </p>
                        <img src="{{ asset('assets/images/service-images/digital-gold.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Digital Gold</span>

                        <p>For daughter's marriage, festival or for savings, help your customers buy digital gold in the quantities they can afford, as low as Rs. 500 per transaction


                        </p>
                        <img src="{{ asset('assets/images/service-images/gold-loan.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Gold Loan</span>

                        <p>Customers can avail loans against their gold jewellery from any PayNearby store. The minimum loan amount is as low as Rs. 10,000 and come at very affordable interest rates


                        </p>






                    </div>
                </div>

            </div>



        </div>
    </div>
</section>


<!-- Services Section Five -->
<section class="services-section-five gray-bg">
    <div class="auto-container">
        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-team"></span></div>
                        <h5>Aeps</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-money"></span></div>
                        <h5>Micro ATM</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-assets"></span></div>
                        <h5>Digi Smart Transfer</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-world"></span></div>
                        <h5>Money Transfer</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-five-area" data-toggle="tab" href="#tab-five" role="tab" aria-controls="tab-five" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-money-1"></span></div>
                        <h5>Bachat Khata</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-six-area" data-toggle="tab" href="#tab-six" role="tab" aria-controls="tab-six" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-notebook"></span></div>
                        <h5> Digital Gold</h5>
                    </div>
                </a>
            </li>
        </ul>

        

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Online Services</h2>
                                <h4>Take your store online with BuyNearby</h4>
                            </div>
                            <div class="text">Single click process to take your store online within minutes. Upload your product catalog on the PayNearby App and an online store will be created for you on the consumer app, BuyNearby. Start attracting more customers and more business

</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section Two -->


<!-- Sponsors Section -->
<section class="sponsors-section">
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-1.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-2.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-3.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-4.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-5.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-1.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-2.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-3.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-4.png')}}" alt=""></a></figure>
            </div>
            <div class="slide-item">
                <figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-5.png')}}" alt=""></a></figure>
            </div>
        </div>
    </div>
</section>
@endsection