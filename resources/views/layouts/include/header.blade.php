<header class="main-header">
    <!-- Header Top -->
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon fal fa-bars"></span></div>
                <div class="logo pull-left">
                    <a href="{{ route('home')}}" title="">
                        <img class="ml-5 mt-4" src="{{ asset('assets/images/logo-cashand/cashand-logo.PNG')}}" style="width: 170px;" alt="" title=""></a>
                </div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">

                        <ul class="navigation clearfix">
                            <li><a href="{{ route('home')}}">Home</a> </li>
                            <li class="dropdown"><a href="{{ route('aboutus')}}">About Us</a>
                                <ul>
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
                                    <li><a href="{{ route('utility-bill-payment')}}">Utility Bill Payment</a></li>
                                    <!-- <li><a href="{{ route('portofoliodetails')}}">Payment Getway</a></li> -->
                                    <li><a href="{{ route('payment-getway')}}">Payment Getway</a></li>
                                    <li><a href="{{ route('partner-service')}}">Partner Service</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('partner-program')}}">Developer Program </a></li>
                            <li><a href="{{ route('contact')}}">Contact</a></li>
                            <li><a href="https://mitra.cashand.in" target="_blank">Login</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
                <ul class="social-links clearfix">
                    <li><a href="https://www.facebook.com/cashand.in" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="https://twitter.com/EvableI"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/cashand-yours-digitally-aa22a0212/"><span class="fab fa-linkedin-in" target="_blank"></span></a></li>
                    <li><a href="https://www.instagram.com/cashand_in_/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('home')}}" title="">
                    <img class="ml-5" src="{{ asset('assets/images/logo-cashand/cashand-logo.PNG')}}" style="width: 170px;" alt="" title=""></a>
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
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="https://twitter.com/EvableI" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.facebook.com/cashand.in" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="https://www.instagram.com/cashand_in_/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/cashand-yours-digitally-aa22a0212/"><span class="fab fa-linkedin-in" target="_blank"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube" target="_blank"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>