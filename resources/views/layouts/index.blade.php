<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cashand - An Iniiative Towards Cashless India</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/home_style.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {!! NoCaptcha::renderJs() !!}

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="icon" href="{{ asset('assets/images/logo-cashand/cashand-favicon-logo.png')}}" type="image/x-icon">

    <link rel="icon" href="{{ asset('assets/images/logo-cashand/cashand-favicon-logo.PNG')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- amit testing  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- amit testing  -->

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
        <!-- Main Header -->
        @include('layouts.include.header')
        <!-- End Main Header -->
        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="#">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Idea</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Growth</a></li>
                        <li><a href="#">Plan</a></li>
                    </ul>
                </div>

            </div>
        </div>
        @yield('content')
        <!-- Main Footer -->
        @include('layouts.include.footer')
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fal fa-arrow-circle-up"></span></div>

    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/lazyload.js')}}"></script>
    <script src="{{ asset('assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- amit testing  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <!-- amit testing  -->
</body>

<!-- Mirrored from azim.commonsupport.com/Finandox/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 10:37:46 GMT -->

</html>