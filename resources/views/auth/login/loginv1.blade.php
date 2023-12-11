@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">

            <h1 class="text-center mb-40">User Login</h1>
<div class="bal-btn"><a href="{{ route('register') }}"></i> New Member? Join Now!</a> <a href="https://zfrmz.eu/fsRKMb3zMFky4fpj2RxE" target="_blank"></i> Existing Member? Access Now!</a></div> 
            <!--Strat Foram Area-->
            <form action="" class="login-form">
                <div class="contact-success"></div>
                <div class="contact-error"></div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border padding form-none"></div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border join-bg">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label>{{ trans('lang.email-address') }}</label>
                            <input type="text" class="join-input email" value="" placeholder="{{ trans('lang.email-address') }}" name="email">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label>{{ trans('lang.password')}} </label>
                            <input type="password" class="join-input password" value="" placeholder="{{ trans('lang.password')}}" name ="password">

                            <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-right padding mtb-10">
                                <span class="forget-links" id="btn-forget">
                                    Forget Password?
                                </span>
                            </div>-->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <input type="submit" class="ct-submit login" value="Login">
                        </div>
                    </form>
                        <!--  Forget Password POPUP-->
                        <div id="forget" class="modal">
                            <div class="modal-content"> <span class="close" id="close">&times;</span>
                                <div class="clr"></div>
                                <div class="forget-heading">Forget Password</div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                    <div class="login-name">Your Email Address</div>
                                    <input type="text" class="join-input">
                                    <div class="clr"></div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                    <div class="login-name">New Password</div>
                                    <input type="password" name="password" class="join-input">
                                    <div class="clr"></div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                    <div class="login-name">Confim Password</div>
                                    <input type="password" name="confirm_password" class="join-input" >
                                    <div class="clr"></div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
                                    <input type="submit" class="ct-submit" value="Submit">
                                    <div class="clr"></div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <!--  End Forget Password POPUP-->


                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border padding form-none"></div>
                </div>

            <!--End Foram Area-->
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        // var addmodal = document.getElementById( "forget" );
        // var addbtn = document.getElementById( "btn-forget" );
        // var addspan = document.getElementById( "close" );
        // addbtn.onclick = function () {

        //     addmodal.style.display = "block";
        // }

        // addspan.onclick = function () {
        //     addmodal.style.display = "none";
        // }

        // delspan.onclick = function () {
        //     delmodal.style.display = "none";
        // }

        // window.onclick = function ( event ) {
        //     if ( event.target == modal ) {
        //         modal.style.display = "none";
        //     }
        // }
    </script>
    <!-- <script>
        const togglePassword =
            document.querySelector('#togglePassword');

        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function(e) {

            // Toggle the type attribute
            const type = password.getAttribute(
                'type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye slash icon
            if (togglePassword.src.match(
                    "{{ custom_asset('eye-open.png') }}")) {
                togglePassword.src =
                    "{{ custom_asset('eye-close.png') }}";
            } else {
                togglePassword.src =
                    "{{ custom_asset('eye-open.png') }}";
            }
        });
    </script> -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
    <script>
        const togglePasswordrt =
            document.querySelector('#togglePasswordrt');

        const passwordrt = document.querySelector('#id_passwordrt');

        togglePasswordrt.addEventListener('click', function(e) {

            // Toggle the type attribute
            const type = passwordrt.getAttribute(
                'type') === 'password' ? 'text' : 'password';
            passwordrt.setAttribute('type', type);

            // Toggle the eye slash icon
            if (togglePasswordrt.src.match(
                    "{{ custom_asset('eye-open.png') }}")) {
                togglePasswordrt.src =
                    "{{ custom_asset('eye-close.png') }}";
            } else {
                togglePasswordrt.src =
                    "{{ custom_asset('eye-open.png') }}";
            }
        });
    </script>
    <script>
        const togglePasswordfc =
            document.querySelector('#togglePasswordfc');

        const passwordfc = document.querySelector('#id_passwordfc');

        togglePasswordfc.addEventListener('click', function(e) {

            // Toggle the type attribute
            const type = passwordfc.getAttribute(
                'type') === 'password' ? 'text' : 'password';
            passwordfc.setAttribute('type', type);

            // Toggle the eye slash icon
            if (togglePasswordfc.src.match(
                    "./images/eye-open.png")) {
                togglePasswordfc.src =
                    "./images/eye-close.png";
            } else {
                togglePasswordfc.src =
                    "./images/eye-open.png";
            }
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.login').on('click', function(e) {
            e.preventDefault();
            const url = "{{ route('login.post') }}";
            const email = $('.email').val();
            const password = $('.password').val();
            let data = new FormData();
            data.append("email", email);
            data.append("password", password);
            ajaxPost(url, data, '.contact-success', '.contact-error');

        });

        function swalAlert(message) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message
            });
        }
    </script>
@endsection
