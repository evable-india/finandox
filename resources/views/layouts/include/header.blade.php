<header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
				<div class="inner">
                    <div class="top-left">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('home')}}"><img class="ml-5" src="{{ asset('assets/images/logo-cashand/cash-hand-logo.PNG')}}"  alt="" style="height: 56px; width: 56px;"></a></div>
                        </div>
                    </div>
                    <div class="top-middile">
                        <div class="language">
                            <span>Language:</span>
                            <form action="#" class="language-switcher">
                                <select class="selectpicker">
                                    <option value="1">English</option>
                                    <option value="1">French</option>
                                    <option value="1">Spanish</option>
                                    <option value="1">Bengli</option>
                                </select>
                            </form>
                        </div>
                        <div class="contact-info">
                            <div class="single-info">
                                <div class="icon-box"><i class="flaticon-call-1"></i></div>
                                <div class="text">Phone Number</div>
                                <h4><a href="tel:+98787687676">+987 876 876 76</a></h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-box"><i class="flaticon-email-4"></i></div>
                                <div class="text">Email Address</div>
                                <h4><a href="mailto:info@webmail.com">info@webmail.com</a></h4>
                            </div>
                        </div>
                    </div>
    
                    <div class="top-right">
                        <a href="https://mitra.cashand.in" class="theme-btn btn-style-two"><span class="btn-title">Login</span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon fal fa-bars"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('home')}}">Home</a> </li>
                                    <li class="dropdown"><a href="{{ route('aboutus')}}">About Us</a>
                                        <ul>
                                            <li><a href="{{ route('team')}}">Team</a></li>
                                            <li><a href="{{ route('faq')}}">Faq</a></li>
                                            <li><a href="{{ route('price')}}">Pricing</a></li>
											<li><a href="{{route('review')}}">Reviews</a></li>
											<li><a href="{{route('tearms')}}">Terms & Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('services')}}">Services</a>
                                        <ul>
                                            <li><a href="{{ route('branch-banking')}}">Branchless Banking</a></li>
                                            <li><a href="{{ route('digital-services')}}">Digital Services</a></li>
                                            <li><a href="{{ route('insurance')}}">Insurance</a></li>
                                            <li><a href="{{ route('travel')}}">Travel</a></li>
                                            <li><a href="{{ route('utility-bill-payment')}}">Utility Bill Payment</a></li>
                                            <!-- <li><a href="{{ route('portofoliodetails')}}">Payment Getway</a></li> -->
                                            <li><a href="{{ route('payment-getway')}}">Payment Getway</a></li>
                                            <li><a href="{{ route('partner-service')}}">Partener Service</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('partner-program')}}">Partner Program </a></li>
                                    <li><a href="#">Blog </a></li>
                                    <!-- <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="{{ route('careers')}}">Careers</a></li>
                                            <li><a href="{{ route('team')}}">Team</a></li>
                                            <li><a href="{{ route('teamdetails')}}">Team Details</a></li>
											
                                            <li class="dropdown"><a href="{{ route('shop')}}">Shop</a>
                                                <ul>
                                                    <li><a href="{{ route('products')}}">Products</a></li>
                                                    <li><a href="{{ route('shppingcart')}}">Shopping Cart</a></li>
                                                    <li><a href="{{ route('checkout')}}">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('faq')}}">Faq's</a></li>
                                            <li><a href="{{ route('error_page')}}">404</a></li>
                                        </ul>
                                    </li> -->
                                    
                                    <li><a href="{{ route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                <!-- <a href="{{ route('home')}}"><img class="ml-5" src="{{ asset('assets/images/logo-cashand/cash-hand-logo.PNG')}}"  alt="" style="height: 56px; width: 56px;"></a> -->
                    <a href="{{ route('home')}}" title=""><img class="ml-5" src="{{ asset('assets/images/logo-cashand/cash-hand-logo.PNG')}}" style="height: 56px; width: 56px;" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>