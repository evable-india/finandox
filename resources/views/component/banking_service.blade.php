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
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.PNG')}}">
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
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.PNG')}}">
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
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.PNG')}}">
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
                                    <img src="{{ asset('assets/images/service-images/cash-withdraw.PNG')}}">
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
<section class="careers-section" style="margin-top: 143px;">
    <div class="auto-container">
        <div class="row">
            <h3 class="banking my-testing-dashed">Banking Services</h3><br><br>
            <h3 class="become">Become the most trusted Banker of your area</h3>
            <p class="text-justify">No working capital required. Offer uninterrupted banking services like cash withdrawal, money transfer, cash deposits, savings, insurance and loan from your shop. Cashand is a PCI DSS and ISO 27001 certified company, which means transacting on the platform is very secure and has a time tested success ratio of more than 99.9%.
            </p>
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-12">
                        <img src="{{ asset('assets/images/service-images/increase-busines.PNG')}}" alt=""><br>
                        <span class="set-up">Set-up your digital distribution business from your phone or laptop</span>
                        <p class="mt-3">Operate from anywhere -- your home or shop. No inventory, no warehouse, no manpower required.
                        </p>
                        <img src="{{ asset('assets/images/service-images/organization.png')}}" alt=""><br>
                        <span class="set-up">Multi-service distribution from one platform</span>
                        <p class="mt-3">Offer Banking, Payments, Travel, Insurance, Bill Payments & Recharge services from one platform. You can offer any or all service..
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-12">
                        <img src="{{ asset('assets/images/service-images/cashand-recharge.PNG')}}" alt="">
                    </div>
                    <div class="col-sm-12 col-lg-4 col-md-12">
                        <img src="{{ asset('assets/images/service-images/on-time-boarding.PNG')}}" alt=""><br>
                        <span class="set-up">One time onboarding</span>
                        <p class="mt-3">Simple and easy on-boarding process for your network. Retailers once on-boarded can use any of our existing services or new products offered and keep adding to their income.
                        </p>
                        <img src="{{ asset('assets/images/service-images/life-time-income.PNG')}}" alt=""><br>
                        <span class="set-up">Lifetime Income</span>
                        <p class="mt-3">Earn best in industry commission on every transaction your retailer makes.
                        </p>
                    </div>
                </div>
                <div style="text-align: center;">
                    <img src="{{ asset('assets/images/service-images/cashand-income.PNG')}}" alt=""><br>
                    <span class="set-up">Earn ₹40,000 to ₹60,000 per month</span>
                    <p class="mt-3">With just 5-7 retailers in your network you can easily add an extra ₹40000 to ₹ 60000 income per month. Onboard more retailers to earn more.
                    </p>
                </div>

            </div>
            <div class="">
                <h3 class="my-testing-dashed mt-3">Cash Withdrawal</h3>

                <p class="text-justify mt-3">No need to visit bank branch or ATM. Withdraw cash anywhere
                    through Aadhaar Number which is linked to your bank account
                    or Debit Card. Check your available balance anytime. Now
                    Cash Withdrawal is easy with Cashand</p>
                <p class="mt-2">Micro ATM meant to be a device that is used by a million
                    Business Correspondents (BC) to deliver basic banking
                    services. The platform will enable Business Correspondents
                    (who could be a local kirana shop owner and will act as 'micro
                    ATM') to conduct instant transactions.</p>
            </div>
            <div class="">
                <h3 class="my-testing-dashed mt-3">Digital Suite</h3>
                <h4 style="font-weight: bold;" class="mt-3">Upgrade your business with Cashand digital solutions</h4>
                <p class="mt-3">This service is free for all our partner retailers. Cashand Digital Suite helps you scale your business by adopting the right digital tools, from multiple digital payment options to digitized customer ledger to manage payments, reconcilliation and customer credits better</p>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <i class="fad fa-book-reader mt-4" style="font-size: 28px; color: orange;"></i><span class="customer ml-4">Customer Khata</span>
                                <p class="cuso">Upgrade your business with 100% better customer credit management. A digital ledger that maintains record of all transactions, sets automatic payment reminders and helps you collect payments through integrated digital payment solutions</p>
                            </div>
                            <div class="col-lg-4">
                                <i class="fas fa-qrcode mt-4" style="font-size: 28px; color: orange;"></i><span class="customer ml-4">UPI QR</span>
                                <p class="cuso">A single QR Code that helps you accept payment from any payment app. Make it your mobile screen saver or print and dispaly on the shop to enable seamless digital payments</p>
                            </div>
                            <div class="col-lg-4">
                                <i class="fas fa-comment-alt-check mt-4" style="font-size: 28px; color: orange;"></i><span class="customer ml-4">SMS Payment</span>
                                <p class="cuso">Collect digital payment by sending SMS with payment link to your customers. Receive quick settlement in your Cashand wallet</p>
                            </div>
                            <div class="col-lg-4">
                                <i class="fad fa-book-reader mt-4" style="font-size: 28px; color: orange;"></i><span class="customer ml-4">Aadhaar Pay</span>
                                <p class="cuso">Accept payments from customers using Aadhar biometric.</p>
                            </div>
                            <div class="col-lg-4">
                                <i class="fad fa-hand-holding-box mt-4" style="font-size: 28px; color: orange;"></i><span class="customer ml-4">Cashand Shopping Card</span>
                                <p class="cuso">Make all your wishes come true with Cashand Shopping Card. Pay securely and earn attractive cashback when you use your card on ecommerce, railways, mutual funds, telecom, and more.</p>
                            </div>
                            <div class="col-lg-4">
                                <i class="fab fa-cc-visa mt-4" style="font-size: 28px; color: orange;"></i><span class="customer ml-4">Cashand Visa Card</span>
                                <p class="cuso">Visa Credit Card Pay is a mode of payment that allows you to transfer funds from any resident bank account.</p>
                            </div>

                        </div>
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
                        <h5>Aadhar Banking</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-money"></span></div>
                        <h5>ATM Banking</h5>
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
                        <h5>Utility BillPayment</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-five-area" data-toggle="tab" href="#tab-five" role="tab" aria-controls="tab-five" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-money-1"></span></div>
                        <h5>Money Transfer</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-six-area" data-toggle="tab" href="#tab-six" role="tab" aria-controls="tab-six" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-notebook"></span></div>
                        <h5> Insurance</h5>
                    </div>
                </a>
            </li>
        </ul>



        <!-- Tab panes -->
        
    </div>
</section>
<div class="container">
    <div class="row">
    <div class="tab-content">
            
            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="{{ asset('assets/images/service-images/cashand-apps.PNG')}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Online Services</h2>
                                    <h4>Take your store online with Cashand</h4>
                                </div>
                                <div class="text">Single click process to take your store online within minutes. Upload your product catalog on the Cashand App and an online store will be created for you on the consumer app, BuyNearby. Start attracting more customers and more business
    
                                </div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
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