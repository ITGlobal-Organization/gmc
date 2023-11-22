@extends('layouts.layoutv2')

@section('content')


<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">

    <h1 class="text-center mb-25">Contact us</h1>
    <p class="text-center mb-40">
    Please get in touch with us by telephone or email. Alternatively, you can use the enquiry form below.
    </p>


    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 border mtb-25">

    <h5 class="mb-20">Get In Touch</h5>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border-bt padding">
    <div class="contact-info">
    <i class="fas fa-phone fa-spin"></i>
    </div>
    <div class="contact-info2"><b>Phone</b> <br><span class="link"><a href="tel:01738448325">01738 448325</a></span></div>

    <div class="clr"></div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border-bt padding">
    <div class="contact-info">
    <i class="fas fa-mail-bulk fa-spin"></i>
    </div>
    <div class="contact-info2"><b>Email</b> <br><span class="link"><a href="mailto:info@perthshirechamber.co.uk">info@perthshirechamber.co.uk</a></span></div>

    <div class="clr"></div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border-bt padding">
    <div class="contact-info">
    <i class="fas fa-map-marker-alt fa-spin"></i>
    </div>

    <div class="contact-info2"><b>Location</b> <br>Perthshire Chamber of Commerce
    66 Tay Sreet Perth United Kingdom PH2 8RA

    </div>

    <div class="clr"></div>
    </div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 border mtb-25">
    <h5 class="mb-20">Send A Message</h5>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <input type="text" class="serch-input" value="" placeholder="Full Name">
    <div class="clr"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <input type="text" class="serch-input" value="" placeholder="Email">
    <div class="clr"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <input type="text" class="serch-input" value="" placeholder="Phone">
    <div class="clr"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <textarea class="contact-input" placeholder="Message"></textarea>
    <div class="clr"></div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left padding">
    <input type="submit" class="ct-submit" value="Submit">
    </div>


    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2208.3009820697243!2d-3.428790422783098!3d56.393633642450624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48863b3e8d1dc883%3A0x1e21ba5efb7c3ca8!2sThe%20Perthshire%20Chamber%20Of%20Commerce!5e0!3m2!1sen!2s!4v1696781648914!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="clr"></div>
    </div>
    <div class="clr"></div>

    </div>
    <!--End Middle-->
@endsection
@section('scripts')

    <script>
        $(document).ready(function() {
            $('#contact-us').validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        validatePhone: true

                    },
                    // message: "required"
                },
                messages: {
                    name: "Please enter your name",
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email"
                    },
                    // message: "Please enter a message"
                },
                submitHandler: function(form) {
                    let data = new FormData(form);
                    ajaxPost("{{ route('contact-us') }}", data, ".success");
                }
            });
        });
        jQuery.validator.addMethod("validatePhone", function(phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return this.optional(element) || phone_number.length > 9 &&
                phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
        },"Please specify a valid phone number");

    </script>
@endsection
