@extends('layouts.layoutv2')
@section('content')
<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
   <div class="middle mtb-60">
      <h1 class="text-center mb-40">{{ trans('messages.user-login-btn')}}</h1>
      <div class="bal-btn"><a href="{{ route('register') }}"></i> {{ trans('messages.new-member')}}</a> <a
         href="https://zfrmz.eu/fsRKMb3zMFky4fpj2RxE" target="_blank"></i> {{ trans('messages.existing-member')}}</a></div>
      <!--Strat Foram Area-->
      <form action="" class="login-form">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border padding form-none"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 border join-bg">
               <div class="contact-success"></div>
               <div class="contact-error"></div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                  <label>{{ trans('lang.email-address') }}</label>
                  <input type="text" class="join-input email" value=""
                     placeholder="{{ trans('lang.email-address') }}" name="email">
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                  <label>{{ trans('lang.password') }} </label>
                  <input type="password" class="join-input password" value=""
                     placeholder="{{ trans('lang.password') }}" name ="password">
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
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center pt-3">
        <a href="javascript:void(0);" class="forgot-pass"> {{ trans('lang.forget_password') }} </a>
      <!-- <input type="button" class="forgot-pass" value="Forgot Password"> -->
      </div>
      <!--  Forget Password POPUP-->
      <form method="POST" action="{{ route('password.email') }}" class="pass-reset">
        @csrf
        <div id="forget" class="modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-custom">
                <span class="close" id="close">&times;</span>
                <div class="clr"></div>
                <div class="forget-heading">{{ trans('lang.forget_password') }}</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                    <div class="login-name">Your Email Address</div>
                        <input type="text" class="join-input" name="email">
                        <div class="error-email"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
                        <input type="submit" class="ct-submit" value="Submit">
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
      </form>
      <!--  End Forget Password POPUP-->
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
   $('.forgot-pass').on('click', function(e) {
       e.preventDefault();
       $('#forget').modal('show');
   });
   $('.pass-reset').on('submit', function(e) {
       e.preventDefault();
       let formData = new FormData(this);
       let url = "{{ route('password.email') }}";
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
                   notify(response.message,'success');
                   $('#forget').modal('hide')
                   // $('#statusSuccessModal').modal('toggle')
               } else {

                notify(response.message,'error');
                $('#forget').modal('hide')
                   // $('#statusErrorsModal').modal('toggle')
               }
           },
           error: function(error) {
               $('.error').text(error.responseJSON.message);
               $('.error').addClass("alert alert-danger");
               if(error.status === 419){
                  setTimeout(() => {
                     location.reload();
                  }, 100);
               }
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
   $('.close').on('click', function(e) {
       e.preventDefault();
       $('#forget').modal('hide');
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
