@extends('layouts.layoutv2')
@section('content')
<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding-tb80">
   <div class="middle">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 border block padding">
         <img src="{{ custom_asset(trans('content.sign-up.image')) }}" class="img" alt="" height="950" width="100%" style="object-fit: cover;">
      </div>
      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-0 border"></div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border">
         <div class="login-heading">{{ trans('content.sign-up.heading')}}</div>
         <form action="#" class="register-form" enctype="multipart/form-data">
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <div class="login-name">{{ trans('lang.name')}}</div>
               <input type="text" class="sign-name">
               <div class="login-line"></div>
               <div class="error-name"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <div class="login-name">{{ trans('lang.phone_no')}}</div>
               <input type="text" class="sign-phone phone" value="1">
               <div class="login-line"></div>
               <div class="error-phone"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <div class="login-name">{{ trans('lang.email')}}</div>
               <input type="text" class="input-login sign-email">
               <div class="login-line"></div>
               <div class="error-email"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
               <div class="login-name">{{ trans('lang.password')}}</div>
               <input type="password" name="password" class="input-pasword password" required="" id="id_password">
               <img src="{{ custom_asset('eye-close.png') }}" id="togglePassword" data-password="id_password" data-imageopen="{{ custom_asset('eye-open.png') }}" data-imageclose="{{ custom_asset('eye-close.png') }}" class="eye-show" onclick="showPassword(this)">
               <div class="login-line margin-bot20"></div>
               <div class="error-password"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <div class="login-name">{{ trans('lang.company_name')}}</div>
               <input type="text" class="sign-company">
               <div class="login-line"></div>
               <div class="error-company"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <div class="login-name">{{ trans('lang.shipment_address')}}</div>
               <input type="text" class="sign-address">
               <div class="login-line"></div>
               <div class="error-address"></div>
               <div class="clr"></div>
            </div>
            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30 gary-colour">
               Do you want to update payment?
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <label class="switch">
               <input type="checkbox">
               <span class="slider round"></span>
               </label>
            </div> -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
			{{ trans('lang.already_have_account')}}<span class="sign-link"><a href="{{route('login')}}"> {{ trans('lang.login')}}</a></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
               <div class="btn-login register"><a href="{{route('register')}}">{{ trans('lang.register')}}</a></div>
         </form>
         <div class="clr"></div>
         </div>
         <div class="clr"></div>
      </div>
      <div class="clr"></div>
   </div>
   <div class="clr"></div>
</div>
<!--End Middle-->
@endsection
@section('scripts')
<script>
   var tel_code = '';
</script>
<script src="{{ custom_asset('intlTelInput.js','scripts')}}"></script>
<script>
   // $.ajaxSetup({
   // headers: {
   // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   // }
   // });
   $('.register').on('click',function(e){
       e.preventDefault();
       let formData = new FormData();
       let url = "{{ route('register.post') }}";
       formData.append('name',$('.sign-name').val());
       formData.append('phone',$('.sign-phone').val());
       formData.append('email',$('.sign-email').val());
       formData.append('password',$('.input-pasword').val());
       formData.append('company',$('.sign-company').val());
       formData.append('address',$('.sign-address').val());
       ajaxPost(url,formData,'.contact-success','.contact-error');

   })
</script>

    <script>

      var input = document.querySelector(".phone");
      window.intlTelInput(input, {
        // allowDropdown: false,
        // autoInsertDialCode: true,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   fetch("https://ipapi.co/json")
        //     .then(function(res) { return res.json(); })
        //     .then(function(data) { callback(data.country_code); })
        //     .catch(function() { callback("us"); });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        // showFlags: false,
        utilsScript: "js/utils.js"
      });
    </script>
@endsection
