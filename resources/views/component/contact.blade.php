@extends('layouts.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>

    </section>

    <div class="col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d217871.43442396598!2d84.67231481112486!3d25.315357048849187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1651575866536!5m2!1sen!2sin" width="1700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Contact Section Two -->
    <section class="contact-section-two">
        <div class="auto-container">
            <div class="contact-info-area">
                <div class="contact-info">
                    <div class="row">
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-email-6"></span></div>
                                <h3>Email Address</h3> <br>
                                <h4>For queries:</h4> <br>
                                <ul>
                                    <li>customercare@cashand.in</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-call-1"></span></div>
                                <h3>Customer Care No</h3> <br>
                                <ul>
                                    <li>+91 768 282 72 56 </li> <br> 
                                    <li>+91 700 890 61 23 </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-column col-lg-4">
                            <div class="icon-box">
                                <div class="icon"><span class="flaticon-location"></span></div>
                                <h3>REGD. OFFICE</h3>
                                <ul>
                                    <li>D28, Ahalya Hill Resort <br></li> 
                                    Near Kiss Campous 10<br>
                                    Pathargadia, Patia,<br>
                                    Bhubaneswar - Odisha - 751024
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-area">
                <div class="sec-title text-center">
                    <div class="sub-title">Write Here</div>
                    <h2>Get In Touch</h2>
                </div>
                <!-- Contact Form-->
                <div class="contact-form">
                    <form method="post" action="https://azim.commonsupport.com/Finandox/sendemail.php" id="contact-form">
                        <div class="row clearfix">                                    
                            <div class="col-md-6 form-group">
                                <label for="name">Enter your name</label>
                                <input type="text" name="username" id="name" placeholder="Enter name here......" required="">
                                <i class="fas fa-user"></i>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label for="email">Enter your email</label>
                                <input type="email" name="email" id="email" placeholder="Enter email here......" required="">
                                <i class="fas fa-envelope"></i>
                            </div>
    
                            <div class="col-md-12 form-group">
                                <label for="message">Enter your message</label>
                                <textarea name="message" id="message" placeholder="Enter message here......"></textarea>
                                <i class="fas fa-edit"></i>
                            </div>
    
                            <div class="col-md-12 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Get In Touch</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection