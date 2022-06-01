@extends('layouts.index')
@section('content')
<style>
    .sponsors-section {
        position: relative;
        padding: 10px 0px !important;
    }
</style>
<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">About Us</li>
        </ul>
    </div>

</section>
<!-- About Section Two -->
<br><br>
<div class="container mt-5">
    <div class="row">
        <h3 class="banking my-testing-dashed">About us</h3><br>
        <!-- <h3 class="become">Ensure recurring monthly income</h3> -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="text-justify">Cashand is a platform for Retailers to become a
                        part of Digital India Initiative as Business
                        Correspondents of Banks and increase their
                        income by providing financial services to their
                        regular customers. The company plans to
                        empower hyper local market in India. Using the
                        power of Mobile and Aadhaar, we have made it
                        our mission to transform our nation’s retail stores
                        into Fintech Marts. Our Retail stores are the future
                        Cash Points and will lead the movement to digitize
                        cash by offering services like Domestic Money
                        Transfer (DMT), Aadhaar Enabled Payment
                        Service (AEPS), Micro ATM (MATM), Insurance,
                        FASTag, Recharge and Bill Payments. <br><br>We are the BANKING PARTNERS of IndusInd Bank , ICICI bank and RBL bank, Fino Payments bank, Kotak Mahindra. CASHAND offers commercial, transactional and electronic banking products and services and many more yet to come.</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/service-images/aeps-business.PNG')}}" alt="">
                </div>
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

            </div>
        </div>

    </div>
</div>
<section class="services-section-four">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sub-title">Features</div>
            <h2>Cashand Features</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-3.png')}}" alt=""></div>
                    <h2>Banking Services</h2>
                    <div class="text">Cashand is committed to bridge the digital divide between urban & rural India by providing basic banking & financial services to everyone – securely and instantly.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-21.png')}}" alt=""></div>
                    <h2>Payment Services</h2>
                    <div class="text">The Cashand Money Payment Services allow to accept payments in different ways – including debit cards, and other generating a QR Code in an Android Smartphone.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-4.png')}}" alt=""></div>
                    <h2>Devices & Other Services</h2>
                    <div class="text">The different devices provided to our Cashand enables them to offer a host of services to their customers saving them time, money, and effort.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-22.png')}}" alt=""></div>
                    <h2>Partner Services</h2>
                    <div class="text">Digital services shouldn't be limited to only those who have digital money. Offer customers in your area access to digital products from our partner brands. </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-5.png')}}" alt=""></div>
                    <h2>Digital Suite</h2>
                    <div class="text">This service is free for all our partner retailers. Cashand Digital Suite helps you scale your business by adopting the right digital tools, from multiple digital payment options to digitized customer ledger to manage payments, reconcilliation and customer credits better.

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-23.png')}}" alt=""></div>
                    <h2>Utility Bill Payment Centre</h2>
                    <div class="text">Households need to pay their EMIs, subscriptions fees and utility bills every month. Solve customer pain point of standing in long queues. From water bills to electricity bills, from phone/DTH recharges to monthly EMIs, provide easy cash collection, bill payment and recharge solutions from your shop.

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- History Section -->
<section class="history-section">
    <div class="auto-container">
        <div class="sec-title text-center light">
            <div class="sub-title">History</div>
            <h2>Our Journey</h2>
        </div>
        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">2020</a>
            </li>
            <li class="nav-item"><a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false"> 2021</a>
            </li>
            <li class="nav-item"><a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">2022</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/service-images/cashand-apps.PNG')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title light">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">We basically focus on the hyperlocal market where the cash
                                flow pocket is small in size. By empowering the hyperlocal
                                market, we can generate a stable economy system.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/service-images/cashand-apps.PNG')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title light">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">We basically focus on the hyperlocal market where the cash
                                flow pocket is small in size. By empowering the hyperlocal
                                market, we can generate a stable economy system.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image"><img src="{{ asset('assets/images/service-images/cashand-recharge.PNG')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content pl-lg-4">
                            <div class="sec-title light">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">We basically focus on the hyperlocal market where the cash
                                flow pocket is small in size. By empowering the hyperlocal
                                market, we can generate a stable economy system.</div>
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
                            <div class="sec-title light">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">We basically focus on the hyperlocal market where the cash
                                flow pocket is small in size. By empowering the hyperlocal
                                market, we can generate a stable economy system.</div>
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
                            <div class="sec-title light">
                                <div class="sub-title">Get Rewards</div>
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">We basically focus on the hyperlocal market where the cash
                                flow pocket is small in size. By empowering the hyperlocal
                                market, we can generate a stable economy system.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sub-title">Our Team</div>
            <h2>Leadership Team</h2>
        </div>
        <div class="row">
            <!-- Team Block One -->
            <div class="col-lg-4 team-block-one">
                <div class="inner-box">
                    <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-1.jpg')}}" alt=""></div>
                    <div class="content">
                        <div class="designation">Founder</div>
                        <h3>Gurubachan Singh</h3>
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
                    <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-1.jpg')}}" alt=""></div>
                    <div class="content">
                        <div class="designation">Founder</div>
                        <h3>Gurubachan Singh</h3>
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
                    <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-1.jpg')}}" alt=""></div>
                    <div class="content">
                        <div class="designation">Founder</div>
                        <h3>Gurubachan Singh</h3>
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
</section><br><br>

@endsection