@extends('layouts.index')
@section('content')

<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>Payment Getway</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Payment Getway</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->
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
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Single click process to take your store online within minutes. Upload your product catalog on the Cashand App and an online store will be created for you on the consumer app, BuyNearby. Start attracting more customers and more business
                                .</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
@endsection