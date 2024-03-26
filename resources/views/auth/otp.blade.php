@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">

            <h1 class="text-center mb-40">User Login</h1>
            <div class="bal-btn"><a href="{{ route('register') }}"></i> New Member? Join Now!</a> <a
                    href="https://zfrmz.eu/fsRKMb3zMFky4fpj2RxE" target="_blank"></i> Existing Member? Access Now!</a></div>
            <!--Strat Foram Area-->
            <div class="success">You are logging from a new device, An OTP has been sent to your email</div>
            <div class="error"></div>
            <form action="" class="login-form">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border padding form-none"></div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border join-bg">
                        <div class="contact-success"></div>
                        <div class="contact-error"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label>{{ trans('lang.otp') }}</label>
                            <input type="text" class="join-input otp" value=""
                                placeholder="{{ trans('lang.otp') }}" name="otp">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <input type="submit" class="ct-submit otp-submit" value="Login">
                        </div>
            </form>


        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border padding form-none"></div>
    </div>

    <!--End Foram Area-->
    <div class="clr"></div>
    </div>
    <div class="clr"></div>
    </div>
    {{-- modal --}}
    <div class="container">
        <div class="row">
            {{-- <a class="btn btn-primary" data-toggle="modal" href="#ignismyModal">open Popup</a> --}}
            <div class="modal fade" id="ignismyModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                         </div>

                        <div class="modal-body">

                            <div class="thank-you-pop">
                                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                                <h1>Thank You!</h1>
                                <p>Your submission is received and we will contact you soon</p>
                                <h3 class="cupon-pop">Your Id: <span>12345</span></h3>

                             </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  p-5">
        <div class="row">
            <div class="modal fade" id="statusErrorsModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center p-lg-4">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#db3646" stroke-width="6"
                                    stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <line class="path line" fill="none" stroke="#db3646" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9"
                                    x2="95.8" y2="92.3" />
                                <line class="path line" fill="none" stroke="#db3646" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38"
                                    X2="34.4" y2="92.2" />
                            </svg>
                            <h4 class="text-danger mt-3">Invalid email!</h4>
                            <p class="mt-3">This email is already registered, please login.</p>
                            <button type="button" class="btn btn-sm mt-3 btn-danger" data-bs-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="statusSuccessModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center p-lg-4">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#198754" stroke-width="6"
                                    stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <polyline class="path check" fill="none" stroke="#198754" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10"
                                    points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                            </svg>
                            <h4 class="text-success mt-3">Oh Yeah!</h4>
                            <p class="mt-3">You have successfully registered and logged in.</p>
                            <button type="button" class="btn btn-sm mt-3 btn-success"
                                data-bs-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.otp-submit').on('click', function(e) {
            e.preventDefault();
            const url = "{{ route('otp.verify') }}";
            const otp = $('.otp').val();
            const password = $('.password').val();
            let data = new FormData();
            data.append("otp", otp);
            ajaxPost(url, data, '.contact-success', '.contact-error');

        });
        // $('.forgot-pass').on('click', function(e) {
        //     e.preventDefault();
        //     $('#forget').modal('show');
        // });
        // $('.pass-reset').on('submit', function(e) {
        //     e.preventDefault();
        //     let formData = new FormData(this);
        //     let url = "{{ route('password.email') }}";
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         url: url,
        //         method: 'POST',
        //         data: formData,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         beforeSend: function() {
        //             setLoader(true);
        //         },
        //         success: function(response) {
        //             console.log(response)
        //             if (response.status) {
        //                 toaster.info("Password reset link has been sent to your email");
        //                 // $('#statusSuccessModal').modal('toggle')
        //             } else {
        //                 toaster.info("Oops! Could not sent password reset link");
        //                 // $('#statusErrorsModal').modal('toggle')
        //             }
        //         },
        //         error: function(error) {
        //             $('.error').text(error.responseJSON.message);
        //             $('.error').addClass("alert alert-danger");
        //             if (error.status === 422) {
        //                 let errors = error.responseJSON.errors;
        //                 let errorsKeys = Object.keys(error.responseJSON.errors)
        //                 errorsKeys.map((error, index) => {
        //                     let html = "<ul>";
        //                     errors[error].map((e) => {
        //                         html += '<li>' + e + '</li>';
        //                     })
        //                     html += '</ul>';
        //                     $(".error-" + error).html(html);
        //                     $(".error-" + error).addClass("text-danger");
        //                 });
        //             }
        //         },
        //         complete: function() {
        //             setLoader(false);
        //             setTimeout(() => {
        //                 $(".success").text('');
        //                 $(".error").text('');

        //                 $(".success").html('');
        //                 $(".error").html('');

        //                 $(".success").removeClass('alert alert-success');
        //                 $(".error").removeClass('alert alert-danger');
        //                 if ($('.errors')) {

        //                     $('.errors').removeClass('text-danger');
        //                     $('.errors').html('');

        //                 }


        //             }, config.timeout)

        //         }
        //     })
        // });
        // $('.close').on('click', function(e) {
        //     e.preventDefault();
        //     $('#forget').modal('hide');
        // });

        // function swalAlert(message) {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Oops...',
        //         text: message
        //     });
        // }
    </script>
@endsection
