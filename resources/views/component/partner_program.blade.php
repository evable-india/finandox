@extends('layouts.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>
    <div class="auto-container">
        <h1>API SERVICES</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">API Program</li>
        </ul>
    </div>
</section>
<!--End Banner Section -->

<section class="we-offer-area text-center bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading text-center">
                    <h2 class="mt-5">What we <span>Offer</span></h2>
                    <h4>Our API Services</h4>
                </div>
            </div>
        </div>
        <div class="row our-offer-items less-carousel">
            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-pen-fancy"></i>
                    <h4>AEPS API</h4>
                    <p>
                        We are providing API for AEPS services.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-dharmachakra"></i>
                    <h4>Micro ATM API</h4>
                    <p>
                        We are providing API for Micro ATM services.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-tasks"></i>
                    <h4>UPI API</h4>
                    <p>
                        We are providing API for UPI services and other payment services.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-tachometer-alt"></i>
                    <h4>Payout API</h4>
                    <p>
                        Instantly send payout to customers with Payout API.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-recycle"></i>
                    <h4>LIC Payment API</h4>
                    <p>
                        We are providing API for Aadhar services.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-md-4 col-sm-6 equal-height">
                <div class="item">
                    <i class="fas fa-headset"></i>
                    <h4>Money Transfer API</h4>
                    <p>
                        We are providing API for DMT services.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</section>

<!-- Demo header-->
<section class="py-5 header bg-gray">
    <div class="container py-1">


        <div class="row" style="margin-bottom: 63px;">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">AEPS API</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">MICRO ATM API</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">PAYOUT API</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">LIC PAYMENT API</span></a>
                </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4 vrline">AEPS API</h4>
                        <p class="font-italic text-muted mb-2">AePS via SDK is a simple and highly secure cash withdrawal system developed by NPCI for Indians using their Aadhaar linked bank accounts. AePS allows a customer to use Aadhaar and access their bank account to perform basic banking transactions like cash-deposit, cash-withdrawal, intrabank or interbank fund-transfer, balance-inquiry, and access their mini statement with just their fingerprint.</p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4 vrline">MICRO ATM API</h4>
                        <p class="font-italic text-muted mb-2">Micro ATM is a step forward to help your customers to get easy access to cash flow and perform digital other banking functions, all in the premises of your shop. The simple functionality provides ordinary citizens with easy access and secure cash withdrawal options while you make a commission on each transaction.</p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4 vrline">PAYOUT API</h4>
                        <p class="font-italic text-muted mb-2">A payout is the transfer of funds from your business account to a contact's fund account. With just a few simple steps, you can get an online bank account and credit card, integrate payout APIs in your workflow, reconcile payments and more!. Payouts are a series of disbursements a business makes to various parties (customers, employees, suppliers, and utility service providers). Regardless of their size, most companies make payouts to the stakeholders in cash or use IMPS, RTGS, NEFT, and cheques as a payment mode.</p>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4 vrline">LIC PAYMENT API</h4>
                        <p class="font-italic text-muted mb-2">Online Payment Gateway is LIC’s initiative to provide you with on demand service within a few clicks! You can now have many of the functionalities that were available only at a branch office, online at your fingertips. With Cashand, a number of solutions have come together to create a platform that offers advantages for startups and the entrepreneurs behind them as well as MSMEs, NBFCs, and others. </p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="vrline">API Integration Solutions</h2>
        <p class="text-justify">Third Party API Integration Services is particularly applied for corporate portals or online programs. The online programs which support in making business operations smoother. By using the integration assistance the companies can allow better user experience. Also, delivering online assistance gets improved. <br><br>To avail, this fruitful service must give thought to our services. We are to offer excellence in API integration solutions for every kind of travel businesses. Tecnoglare is working with a unit of experts having an understanding of different aspects of integration. The aspects involve a:-</p>
        <div class="col-lg-12 mt-2">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('assets/images/service-images/our-banking-api.png')}}" style="width: 1590px;" alt="">
                </div>
            </div>
        </div>
        <h2 class="vrline">What Makes Tecnoglare A Best API Integration Company?</h2>
        <p class="text-justify">Cashand operating as the best API integration company which supports business in multiple ways. Whether it is about connecting multiple applications or it is improving the worth of current arrangement our integration works for all. Business applications that integrate significant APIs deliver more powerful functionalities as compared to the one which operates separately.<br><br>While developing API integration solutions the main concern is to fulfill client demands. The demands can vary business to business as different business conducts on different strategies. By excellent and custom APIs connectivity linking to third-party interface and portals, the company allows clients arranging daily business affairs and safer linkage.</p>

        <h2 class="vrline">Ensure Safety</h2>
        <p class="text-justify">
            The source of API procurement matters a lot. Some API service provider ensures more safety whereas others provide less. Must go through the safety policies completely to make your business safe. <br><br>
            Concentrate on Flexible APIs
        </p>
        
    </div>
</section>



@endsection