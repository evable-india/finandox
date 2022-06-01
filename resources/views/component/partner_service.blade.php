@extends('layouts.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>
    <div class="auto-container">
        <h1>Partner Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Partner Services</li>
        </ul>
    </div>
</section>
<!--End Banner Section -->
<div class="container">
    <div class="row">
        <h4 class="partners vrline">Partner's Benefits</h4>
    </div>
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
                <img src="{{ asset('assets/images/service-images/features-of-aadhar-card.PNG')}}" alt="">
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
</div>
<div style="background-color: #F2861E;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-12 mt-5">
                        <span class="partnerss vrlines">Formula to earn more ?</span>
                        <p class="itis">It is easy to earn <b>40,000</b> to <b>60,000</b> every month with just 5-7 retailers in your network. You earn everytime a customer does a financial transaction on your retail network.</p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-12 mt-5">
                        <img src="{{ asset('assets/images/service-images/how-to-earn-more.PNG')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h4 class="my-testing-dashed mt-5">Make more profit from your distribution business. <br>One-time investment, lifetime returns</h4>
        <div class="col-lg-12 mt-5">
            <img style="text-align: center; margin-left: 98px;" src="{{ asset('assets/images/service-images/our-partner-benefits-program.PNG')}}" alt="">
        </div>
    </div>
    <h3 class="distri">Distributors across different categories- </h3>
    <h3 class="distributors">Telecom, Retail, Pharma, Dairy, FMCG, Hardware and many more work with us.</h3>
</div>
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