@extends('layouts.index')
@section('content')

<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>

    <div class="auto-container">
        <h1>Our Insurance</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">Insurance</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->
<section class="careers-section">
    <div class="auto-container">
        <div class="row">
            <h3 class="banking my-testing-dashed">Insurance</h3><br>
            <h3 class="become">Ensure recurring monthly income</h3>
            <p class="text-justify">Fill in your details and get insurance policy premium quotes from top-rated insurers instantly. From numerous available quotes, choose the one that best suits your requirements and budget.
            </p>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <img src="{{ asset('assets/images/service-images/features-of-aadhar-card.PNG')}}" alt="">
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <img src="{{ asset('assets/images/service-images/gas-electric-recharge-bills.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Health</span>
                        <p class="mt-1">Health insurance is a contract where an insurance company provides medical coverage to the insured for a premium amount. It covers medical expenses incurred on hospitalization, surgeries, day care procedures, etc. A health insurance policy either reimburses the medical costs or offers cashless treatment.

                        </p>
                        <img src="{{ asset('assets/images/service-images/mobile-recharge-services.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Life</span>
                        <p class="mt-2">Offer Savings Khata Insurance to help your customers save their hard earned money through flexible deposits. Customers get upto 26% return on the money deposited in addition to 10X life insurance cover


                        </p>
                        <img src="{{ asset('assets/images/service-images/credit-card-payments.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">General</span>
                        <p class="mt-1">We offer a range of affordable general insurance plans, including bike insurance and mobile device protection plans

                        </p>


                    </div>

                </div>

            </div>



        </div>
    </div>
    </div>
</section>
<!-- Sponsors Section -->


@endsection