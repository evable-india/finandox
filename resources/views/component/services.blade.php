@extends('layouts.index')
@section('content')
<!-- Services Section Three -->
<!-- Services Section Three -->
<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li class="active">Services</li>
        </ul>
    </div>

</section>

<!--End Banner Section -->
<section class="services-section-three style-two">
    <div class="sec-title text-center">
        <div class="sub-title">Services</div>
        <h2>Our Services</h2>
    </div>
    <div class="auto-container">
        <div class="row">
            <!-- Services Block One -->
            <div class="service-block-one col-lg-4">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/cashand-visa-card.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Banking Card</h3>
                    <div class="text">Banking cards offer consumers more security, convenience, and control than any other payment method.</div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-4">
                <div class="inner-box">
                    <div class="icon">
                        <!-- <span class="flaticon-money"></span><span class="round-shape"></span> -->
                        <img src="{{ asset('assets/images/service-images/ussd.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>USSD</h3>
                    <div class="text">The innovative payment service *99# works on Unstructured Supplementary Service Data (USSD) channel.</div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-4">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/aeps-logo.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>AEPS</h3>
                    <div class="text">The innovative payment service *99# works on Unstructured Supplementary Service Data (USSD) channel.</div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-4">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/upi.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>UPI</h3>
                    <div class="text">The innovative payment service *99# works on Unstructured Supplementary Service Data (USSD) channel.</div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-4">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/mobile-wallets.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Mobile Wallets</h3>
                    <div class="text">A mobile wallet is a way to carry cash in digital format.You can link your credit card or debit card information in mobile device</div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-4">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/micros-atm.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Micro ATM</h3>
                    <div class="text">Micro ATM meant to be a device that is used by a million Business Correspondents (BC) to deliver basic banking services.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="container">
    <div class="row">
        <h2 class="products">Products at a Glance</h2>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-6">
                <img src="{{ asset('assets/images/service-images/cashand-products-service.PNG')}}" alt="">
            </div>
            <div class="col-lg-4 col-sm-6">
                <img src="{{ asset('assets/images/service-images/aeps-logo.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Flash as a Service</span>
                <p class="mt-1">IMPS, AEPS, Aadharpay, Micro ATM, Insurance, Micro credit.
                </p>
                <p>IMPS, AEPS, Aadharpay, Micro ATM, Insurance, Micro credit.</p>
                <h4>Flash as a Service</h4>
                <p>IMPS, AEPS, Aadharpay, Micro ATM, Insurance, Micro credit.</p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <p>amit</p>
            </div>

        </div>
    </div>
</div>
<br><br><br> -->
@endsection