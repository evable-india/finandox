@extends('layouts.index')
@section('content')
<!-- Page Banner Section -->

<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
    <div class="bottom-rotten-curve alternate"></div>
    @if($message = Session::get('success'))

    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>

    </div>
    @endif
    <div class="auto-container">
        <h1>Contact Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="">Home</a></li>
            <li class="active">Contact</li>
        </ul>
    </div>

</section>
<div class="col-lg-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59845.67017519767!2d85.81699360000003!3d20.368273100000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1652341040309!5m2!1sen!2sin   " width="1700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <form action="{{ route('contact_post')}}" method="POST" autocomplete="off" id="regForm">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-md-6 form-group">
                            <label for="name"> First Name <span class="text-danger">*</span> </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="First Name">
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
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            {!! app('captcha')->display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong class="tst4 btn btn-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                            <div class="col-md-12 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Get In Touch</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script>
    $(document).ready(function() {
        $("#regForm").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 20,
                },

                message: {
                    required: true

                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                }

            },
            messages: {
                name: {
                    required: "First name is required",
                    maxlength: "First name cannot be more than 20 characters"
                },
                lastName: {
                    required: "Last name is required",
                    maxlength: "Last name cannot be more than 20 characters"
                },
                email: {
                    required: "Email is required",
                    email: "Email must be a valid email address",
                    maxlength: "Email cannot be more than 50 characters",
                },

            }
        });
    });
</script>