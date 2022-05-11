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
            <div class="card border-0 shadow rounded-xs pt-3">
                <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/cashand-visa-card.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">Banking Card</h4>
                    <p>Banking cards offer consumers more security, convenience, and control than any other payment method.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-3">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/ussd.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">USSD</h4>
                    <p>
The innovative payment service *99# works on Unstructured Supplementary Service Data (USSD) channel.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-4">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/aadhar-card.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">AEPS</h4>
                    <p>The innovative payment service *99# works on Unstructured Supplementary Service Data (USSD) channel.

</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-3">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/upi.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">UPI</h4>
                    <p>The innovative payment service *99# works on Unstructured Supplementary Service Data (USSD) channel.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-4">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/mobile-wallets.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">Mobile Wallets</h4>
                    <p>A mobile wallet is a way to carry cash in digital format.You can link your credit card or debit card information in mobile device to mobile wallet</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-4">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/pos.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">POINT OF SALE</h4>
                    <p>
POS
A point of sale (PoS) is the place where sales are made. On a macro level, a PoS may be a mall, a market or a city. <br><br></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-4">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/mobile-banking.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">Mobile Banking</h4>
                    <p>Mobile banking is the act of making financial transactions on a mobile device (cell phone, tablet, etc. <br><br></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card border-0 shadow rounded-xs pt-4">
            <div class="card-body" style="border-bottom: 2px solid #f5af19;">
                    <i class="icon-lg icon-primary icon-bg-primary icon-bg-circle"></i>
                    <img src="{{ asset('assets/images/service-images/micros-atm.PNG')}}" alt="">

                    <h4 class="mt-4 mb-3">Micro ATM</h4>
                    <p>Micro ATM meant to be a device that is used by a million Business Correspondents (BC) to deliver basic banking services.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- <section class="careers-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Banking Cards</div><br>
                        <img class="ml-5" src="{{ asset('assets/images/service-images/bank-card.PNG')}}" style="height: 100px;" width="100;" alt="">
                        <h3>Banking Cards</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>UX Designer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>UX Designer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>Senior Consultant</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>UI Designer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>UX Designer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>Content Writer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>Graphic Designer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 career-block">
                    <div class="inner-box">
                        <div class="time">Full Time</div>
                        <h3>Software Engineer</h3>
                        <div class="text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                        <ul class="info">
                            <li><strong>Location:</strong> Texus, USA</li>
                            <li><strong>Sallary:</strong> $2000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- Services Section Five -->
<section class="services-section-five gray-bg">
    <div class="auto-container">
        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-team"></span></div>
                        <h5>Banking Card</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-money"></span></div>
                        <h5>USSD</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-assets"></span></div>
                        <h5>AEPS</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-world"></span></div>
                        <h5>UPI</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-five-area" data-toggle="tab" href="#tab-five" role="tab" aria-controls="tab-five" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-money-1"></span></div>
                        <h5>Mobile Wallets</h5>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-six-area" data-toggle="tab" href="#tab-six" role="tab" aria-controls="tab-six" aria-selected="false">
                    <div class="icon-box">
                        <div class="icon"><span class="flaticon-notebook"></span></div>
                        <h5>Micro ATM</h5>
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
                                <h2>Just Proved Our Selves <br>For Great Works.</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
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
@endsection