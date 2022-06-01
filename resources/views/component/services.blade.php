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
<section class="careers-section" style="margin-top: -145px;">
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

@endsection