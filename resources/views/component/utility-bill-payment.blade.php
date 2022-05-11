@extends('layouts.index')
@section('content')
  <!-- Page Banner Section -->
  <section class="page-banner">
  <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Utility Bill Payment</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Utility Bill Payment</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <section class="careers-section" style="background-color: #FEFDF6;">
    <div class="auto-container">
        <div class="row">
            <h3 class="banking my-testing-dashed">Utility Bill Payment Centre</h3><br><br>
            <h3 class="become">Ensure recurring monthly income</h3>
            <p class="text-justify">Households need to pay their EMIs, subscriptions fees and utility bills every month. Solve customer pain point of standing in long queues. From water bills to electricity bills, from phone/DTH recharges to monthly EMIs, provide easy cash collection, bill payment and recharge solutions from your shop.
            </p>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <img src="{{ asset('assets/images/service-images/cashand-utility-bill-payment.PNG')}}" alt="">
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-12">
                    <img src="{{ asset('assets/images/service-images/gas-electric-recharge-bills.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Gas, Electricity & Water Bills</span>
                        <p class="mt-1">Every household needs to pay these utility bills every month. Offer them from your shop and ensure regular monthly income for yourself
                        </p>
                        <img src="{{ asset('assets/images/service-images/mobile-recharge-services.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Recharge Services</span>
                        <p class="mt-2">Offer customers the options to recharge mobile, DTH services and data cards from 15+ partners. Recharge transactions are frequent in nature and will ensure recurring income

                        </p>
                        <img src="{{ asset('assets/images/service-images/credit-card-payments.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Credit Card Payments</span>
                        <p class="mt-1">Help customers make their credit card payments across 25+ banks. Credit card payment also follows a monthly cycle, and will ensure recurring income opportunity for yourself
                        </p>
                        <img src="{{ asset('assets/images/service-images/cash-collection.PNG')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp; <span class="service_name">Cash Collection</span>
                        <p class="mt-1">Offer cash collection services for more than 40+ partners. Customers and collection agents can deposit EMIs at your store, and you earn on every cash deposit.

                        </p>
                       
                    </div>
                    
                </div>

            </div>
           
            

            </div>
        </div>
    </div>
</section>
<!-- our services section start here  -->
    
<!-- our services end here  -->
@endsection