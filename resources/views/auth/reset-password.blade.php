@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">

            <h1 class="text-center mb-40">User Login</h1>
            <div class="bal-btn"><a href="{{ route('register') }}"></i> New Member? Join Now!</a> <a href="https://zfrmz.eu/fsRKMb3zMFky4fpj2RxE" target="_blank"></i> Existing Member? Access Now!</a></div>
                <!--Strat Foram Area-->
                <form action="{{route('password.update')}}" class="login-form">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border padding form-none"></div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border join-bg">
                            <div class="contact-success"></div>
                            <div class="contact-error"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                <label>{{ trans('lang.email-address') }}</label>
                                <input type="text" class="join-input email" value="" placeholder="{{ trans('lang.email-address') }}" name="email">
                                <div class="error-email"></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                <label>{{ trans('lang.password')}} </label>
                                <input type="password" class="join-input password" value="" placeholder="{{ trans('lang.password')}}" name ="password">
                                <div class="error-password"></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                <div class="login-name">Confim Password</div>
                                <input type="password" name="password_confirmation" class="join-input" >
                                <div class="clr"></div>
                                <div class="error-password_confirmation"></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <input type="submit" class="ct-submit login" value="Update Password">
                            </div>
                        </div>
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

@endsection
@section('scripts')
    <script>
        $('.login-form').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = "{{ route('password.update') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    setLoader(true);
                },
                success: function(response) {
                    console.log(response)
                    if (response.status) {
                        window.location.href="{{route('login')}}";
                    }else{
                        $('.contact-error').text("Oops! We could not update your password, Please try again with correct email.");
                        $('.contact-error').addClass("alert alert-danger");
                    }
                },
                error: function(error) {
                    $('.error').text(error.responseJSON.message);
                    $('.error').addClass("alert alert-danger");
                    if (error.status === 422) {
                        let errors = error.responseJSON.errors;
                        let errorsKeys = Object.keys(error.responseJSON.errors)
                        errorsKeys.map((error, index) => {
                            let html = "<ul>";
                            errors[error].map((e) => {
                                html += '<li>' + e + '</li>';
                            })
                            html += '</ul>';
                            $(".error-" + error).html(html);
                            $(".error-" + error).addClass("text-danger");
                        });
                    }
                },
                complete: function() {
                    setLoader(false);
                    setTimeout(() => {
                        $(".success").text('');
                        $(".error").text('');

                        $(".success").html('');
                        $(".error").html('');

                        $(".success").removeClass('alert alert-success');
                        $(".error").removeClass('alert alert-danger');
                        if ($('.errors')) {

                            $('.errors').removeClass('text-danger');
                            $('.errors').html('');

                        }


                    }, config.timeout)

                }
            })
        });
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        // $('.login').on('click', function(e) {
        //     e.preventDefault();
        //     const url = "{{ route('login.post') }}";
        //     const email = $('.email').val();
        //     const password = $('.password').val();
        //     let data = new FormData();
        //     data.append("email", email);
        //     data.append("password", password);
        //     ajaxPost(url, data, '.contact-success', '.contact-error');

        // });
        // $('.forgot-pass').on('click', function(e) {
        //     e.preventDefault();
        //     $('#forget').modal('show');
        // });
        // $('.pass-reset').on('submit', function(e) {
        //     e.preventDefault();
        //     let formData = new FormData(this);
        //     let url = "{{route('password.email')}}";
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
        //             console.log(response.response)
        //             if (response.status) {
        //                 console.log("treee")
        //                 $('#statusSuccessModal').modal('toggle')
        //             } else {
        //                 console.log("falseee")
        //                 $('#statusErrorsModal').modal('toggle')
        //             }
        //         },
        //         error: function(error) {
        //             console.log((error))
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
