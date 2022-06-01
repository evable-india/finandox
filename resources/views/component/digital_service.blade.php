@extends('layouts.index')
@section('content')
<!-- Services Section Three -->
<!-- Services Section Three -->
<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>Digital Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home')}}">Home</a></li>
            <li class="active">Digital Services</li>
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
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/aadhar-card-api.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Aadhar Pay</h3>
                    <div class="text-justify">Aadhaar Pay allows merchants to collect payment through a customer's Aadhaar Number and Biometric Authentication <br><br></div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <!-- <span class="flaticon-money"></span><span class="round-shape"></span> -->
                        <img src="{{ asset('assets/images/service-images/dmt-money-transfer.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>DMT</h3>
                    <div class="text-justify">(DMT) is an assisted service to facilitate money transfer needs of unbanked, under-banked and migrant people in India. <br><br></div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/aeps-logo.PNG')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>AEPS</h3>
                    <div class="text-justify">AePS is a bank led model which allows online interporable financial inclusion transaction.
                        <br><br>
                    </div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/cms-services.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>CMS</h3>
                    <div class="text-justify">(CMS) is a software application that enables users to create, edit, collaborate on, publish and store digital content. <br><br></div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/micro-loan.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Micro Loan</h3>
                    <div class="text-justify">(DMT) is an assisted service to facilitate money transfer needs of unbanked, under-banked and migrant people in India. <br><br></div>
                </div>
            </div>
            <!-- Services Block One -->
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/micro-atm.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Micro ATM</h3>
                    <div class="text-justify">Cashand offers the Micro ATM solution which is fast, secure, and efficient, with various features. <br><br></div>
                </div>
            </div>
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/recharge-api.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Recharge</h3>
                    <div class="text-justify">Cashand offers a mobile recharge option through which you can make a prepaid mobile recharge, utility bill payments etc.</div>
                </div>
            </div>
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/insurance.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Insurance</h3>
                    <div class="text-justify">Cashand a leading life insurance company in India, offers a range of life insurance policies to help you protect you and your family.</div>
                </div>
            </div>
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/lic-insurance.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Lic Payment</h3>
                    <div class="text-justify">LIC's e Services · Facility provided to pay renewal premium due, loan-interest due and repayment of loan through:</div>
                </div>
            </div>
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/vps-payment.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>VPS</h3>
                    <div class="text-justify">Virtual Payment System automatically charges a small portal courtesy fee when you make a payment to a VPS merchant.</div>
                </div>
            </div>
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/pancard-services.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Pan Card KYC</h3>
                    <div class="text-justify">PAN Card is issued by the Income Tax Department with help from authorised district-level PAN agencies, Cashand Technology and Services</div>
                </div>
            </div>
            <div class="service-block-one col-lg-3">
                <div class="inner-box">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service-images/utility-bill-payment.png')}}" alt=""><span class="round-shape"></span>
                    </div>
                    <h3>Utility Bill Payment</h3>
                    <div class="text-justify">Micro ATM meant to be a device that is used by a million Business Correspondents (BC) to deliver basic banking services.</div>
                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- <p>this is amit kumar</p> -->
                        <img src="{{ asset('assets/images/service-images/cashand-aeps-business.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p class="text-justify px-2">The objective of Cashand FinTech Innovations is to serve the unmet financial needs of those segments of the population which are not the core target segments of traditional financial services models and in the process ‘empower’ them with the help of technology thereby creating more accessibility & opportunities for growth. Thus, Cashand FinTech Innovations aims to contribute to the larger goal of financial inclusion by Techpowering the world with help of capabilities across Design, Technology & Manufacturing platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection