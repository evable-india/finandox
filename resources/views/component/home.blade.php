@extends('layouts.index')
@section('content')

<!-- Banner Section -->
<div style="margin-top: 90px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/images/testing/Big-Basket_Web-Banner.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/images/testing/Naman-FD-Web-banner.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/images/testing/Zomato-Web-Banner.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br><br>
<!--End Banner Section -->
<!-- Welcome Setion -->
<!-- Feature Section -->
<section class="feature-section">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon"><span class="flaticon-team"></span></div>
                            <h5>Aadhar Banking</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon"><span class="flaticon-money"></span></div>
                            <h5>ATM Banking</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon"><span class="flaticon-assets"></span></div>
                            <h5>Utility BillPayment</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon"><span class="flaticon-world"></span></div>
                            <h5>Money Transfer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon"><span class="flaticon-money-1"></span></div>
                            <h5>Insurance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="icon"><span class="flaticon-notebook"></span></div>
                            <h5>Loan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our services page start here  -->
<section class="c-services">
    <section class="container">
        <section class="col-md-12 nopad">
            <section class="c-points wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <section class="row">
                    <section class="col-md-3">
                        <section class="sol-set">
                            <section class="row">
                                <section class="col-xs-3 setimg">
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.png')}}">
                                </section>
                                <section class="col-xs-9 nopad">
                                    <h5>Cash Withdrawal</h5>
                                    <p>Initiate cash with the use of biometric authentication</p>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="col-md-3">
                        <section class="sol-set">
                            <section class="row">
                                <section class="col-xs-3 setimg">
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.png')}}">
                                </section>
                                <section class="col-xs-9 nopad">
                                    <h5>Fund Transfer</h5>
                                    <p>Used to initiate fund transfer based on Aadhaar number</p>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class="col-md-3">
                        <section class="sol-set">
                            <section class="row">
                                <section class="col-xs-3 setimg">
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.png')}}">
                                </section>
                                <section class="col-xs-9 nopad">
                                    <h5>Mini Statement </h5>
                                    <p>Used to view last 5-10 transactions of your Account. </p>
                                </section>

                            </section>
                        </section>
                    </section>
                    <section class="col-md-3">
                        <section class="sol-set">
                            <section class="row">
                                <section class="col-xs-3 setimg">
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.png')}}">
                                </section>
                                <section class="col-xs-9 nopad">
                                    <h5>Balance Inquiry</h5>
                                    <p>
                                        Used to initiate Balance inquiry based on Aadhaar number
                                    </p>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- our services page end here  -->
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Our Digital Payments</h2>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/aeps-services.png')}}" alt="">

                        <h4 class="mt-4 mb-3">AEPS</h4>
                        <p>AePS is a bank led model which allows online interoperable financial inclusion transaction.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-3">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/aadhar-card-api.png')}}" alt="">

                        <h4 class="mt-4 mb-3">Aadhar Pay</h4>
                        <p>
                            Aadhaar Pay allows merchants to collect payment through a customer's Aadhaar Number and Biometric Authentication. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-3">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/upi.png')}}" alt="">

                        <h4 class="mt-4 mb-3">Money Transfer</h4>
                        <p>The fast & trusted way to send money. Millions of people check our rates and send money with us every day. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/micro-atm.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Micro ATM</h4>
                        <p>Cashand offers the Micro ATM solution which is fast, secure, and efficient, with various features</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/cms-services.png')}}" alt="">

                        <h4 class="mt-4 mb-3">CMS</h4>
                        <p>(CMS) is a software application that enables users to create, edit, collaborate on, publish and store digital content.<br><br></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/micro-loan.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Micro Loan</h4>
                        <p>Micro Loans is a financial service aimed at providing small loans to low-income individuals and making them self reliant.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/recharge-api.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Recharge</h4>
                        <p>Cashand offers a mobile recharge option through which you can make a prepaid mobile recharge, utility bill payments, metro recharge, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/insurance.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Insurance</h4>
                        <p>Cashand, a leading life insurance company in India, offers a range of life insurance plans and policies to help you protect you and your family.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/lic-insurance.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Lic Payment</h4>
                        <p>LIC's e Services · Facility provided to pay renewal premium due, loan-interest due and repayment of loan through:</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/vps-payment.png')}}" alt="">
                        <h4 class="mt-4 mb-3">VPS</h4>
                        <p>Virtual Payment System automatically charges a small portal courtesy fee when you make a payment to a VPS merchant. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/pancard-services.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Pan Card KYC</h4>
                        <p>PAN Card is issued by the Income Tax Department with help from authorised district-level PAN agencies, Cashand Technology and Services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card border-0 shadow rounded-xs pt-4">
                    <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                        <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                        <img src="{{ asset('assets/images/service-images/utility-bill-payment.png')}}" alt="">
                        <h4 class="mt-4 mb-3">Utility Bill Payment</h4>
                        <p>Micro ATM meant to be a device that is used by a million Business Correspondents (BC) to deliver basic banking services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- our services page start here  -->

<!-- about aeps start here  -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <img class="aiepss" src="{{ asset('assets/images/service-images/cashand-certificates.png')}}" alt="">
                </div>
                <div class="col-lg-6 mt-5">
                    <h2 class="my-testing-dashed">Certified By Govt of India</h2><br>
                    <p class="text-justify">Startup India is an initiative of the Government of India. The campaign was first announced by Indian Prime Minister, Narendra Modi during his speech in 15 August 2015. <br><br>We are successfully achieved the certification by the Government of India. Startup India is a flagship initiative of the Government of India, intended to build a strong ecosystem that is conducive for the growth of startup businesses, to drive sustainable economic growth and generate large scale employment opportunities. The Government through this initiative aims to empower startups to grow through innovation and design.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <h2 class="my-testing-dashed">Features Of AePS (Aadhaar Enabled Payment System) API</h2>
                    <p class="mt-2">AEPS is the abbreviation of Aadhaar Enabled Payment System. This payment system is based on the Unique Identification Number. It allows Aadhaar card holders to make financial transactions effortlessly through Aadhaar-based authentication.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img class="aadhar" src="{{ asset('assets/images/service-images/features-of-aadhar-card.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about aeps end here  -->
<!-- About Section -->

<!-- our service page start here  -->

<!-- our service page end here  -->
<!-- Services Section -->


<!-- Gallery Section -->
<section class="gallery-section">
    <div class="sortable-masonry">

        <div class="auto-container">
            <div class="row m-0 justify-content-md-between align-items-center">
                <div class="sec-title">
                    <div class="sub-title">Portfolio</div>
                    <h3>About Our Products</h3>
                </div>
                <!--Filter-->
                <div class="filters text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <ul class="filter-tabs filter-btns">
                        <li class="active filter" data-role="button" data-filter=".all"><span>Financial</span></li>
                        <li class="filter" data-role="button" data-filter=".category-1"><span>Banking</span></li>
                        <li class="filter" data-role="button" data-filter=".category-2"><span>Insurance </span></li>
                        <li class="filter" data-role="button" data-filter=".category-3"><span>Family</span></li>
                        <li class="filter" data-role="button" data-filter=".category-4"><span>Business</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="auto-container">
            <div class="items-container row">
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-10.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-10.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-4">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-11.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-11.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-12.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-12.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-13.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-13.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-14.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-14.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-15.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-15.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-16.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-16.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Gallery Block One -->
                <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                    <div class="inner-box">
                        <div class="image">
                            <img src="assets/images/gallery/gallery-17.jpg" alt="">
                        </div>
                        <div class="caption-title">
                            <h5>Finance</h5>
                            <h3><a href="#">Miranda Hilix Bar</a></h3>
                            <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-17.jpg" class="zoom-btn"><span>+</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- End block -->
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video-section" style="background-image: url(assets/images/background/image-2.jpg);">
    <div class="auto-container">
        <div class="default-video-box text-center wow zoomIn" data-wow-delay="200ms" data-wow-duration="1200ms">
            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox ripple"><span class="fas fa-play"></span></a>
        </div>
        <div class="sec-title light text-center">
            <div class="sub-title">Intro Video</div>
            <h2>Our Latest Insights <br>& Overview.</h2>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-chooseus-section">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-box">
                    <div class="sec-title">
                        <div class="sub-title">Let's </div>
                        <h2>Our Success <br>Journey ?</h2>
                    </div>
                    <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">Our Mission </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">Our Vission</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">Our Value</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                            <div class="clearfix">
                                <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-4.jpg')}}" alt=""></div>
                                <div class="text">
                                    <p class="text-justify mt-3">No need to visit bank branch or ATM. Withdraw cash anywhere through Aadhaar Number which is linked to your bank account or Debit Card. Check <span class="ml-3">your available balance anytime. Now Cash Withdrawal is easy with Cashand.</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                            <div class="clearfix">
                                <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-4.jpg')}}" alt=""></div>
                                <div class="text">
                                    <p class="text-justify mt-3">We are the BANKING PARTNERS of IndusInd Bank , ICICI bank and RBL bank, Fino Payments bank, Kotak Mahindra. CASHAND offers commercial, <span class="ml-3">transactional and electronic banking products and services and many more <span class="ml-3">yet to come</span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                            <div class="clearfix">
                                <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-4.jpg')}}" alt=""></div>
                                <div class="text">
                                    <p class="text-justify mt-3">Cashand is a platform for Retailers to become a part of Digital India Initiative as Business Correspondents of Banks and increase their income by providing <span class="ml-3">financial services to their regular customers. The company plans to empower <span class="ml-3">hyper local market in India.</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper">

                    <img src="{{ asset('assets/images/service-images/cashand-products.png')}}" style="height: 656px; width: 560px;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->

@endsection