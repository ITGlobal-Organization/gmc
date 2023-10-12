@extends('layouts.layoutv2')
@section('content')
<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding-tb80">
   <div class="middle">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 border block padding">
         <img src="{{ custom_asset(trans('content.login.image')) }}" class="img" alt="" height="650" width="100%" style="object-fit: cover;">
      </div>
      <div class="col-xs-0 col-sm-0 col-md-0 col-lg-0 border"></div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border">
         <div class="login-heading">{{ trans('content.login.heading') }}</div>
         <div class="login-normal padding-bot50">{{ trans('content.login.subheading') }}</div>
         <form action="" class="login-form">
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
               <div class="login-name">{{ trans('lang.email') }}</div>
               <input type="text" class="input-login email">
               <div class="login-line"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
               <div class="login-name">{{ trans('lang.password') }}</div>
               <input type="password" name="password" class="input-pasword password" required="" id="id_password">
               <img src="{{ custom_asset('eye-close.png') }}" id="togglePassword" data-password="id_password" data-imageopen="{{ custom_asset('eye-open.png') }}" data-imageclose="{{ custom_asset('eye-close.png') }}" class="eye-show" onclick="showPassword(this)">
               <div class="login-line margin-bot20"></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border">
               <label class="container">{{ trans('lang.remember_me') }}
               <input type="checkbox">
               <span class="checkmark"></span>
               </label>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border">
               <span class="forget-links" id="btn-forget">
               {{ trans('lang.forget_password') }}
               </span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
               <div class="btn-login login"><a href="#">{{ trans('lang.login') }}</a></div>
               <div class="clr"></div>
            </div>
         </form>
         <!--  Forget Password POPUP-->
         <div id="forget" class="modal">
            <div class="modal-content">
               <span class="close" id="close">&times;</span>
               <div class="clr"></div>
               <div class="forget-heading">Forget Password</div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-bot30">
                  <div class="login-name">Your Email Address</div>
                  <input type="text" class="input-login">
                  <div class="login-line"></div>
                  <div class="clr"></div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                  <div class="login-name">New Password</div>
                  <input type="password" name="password" class="input-pasword" required="" id="id_passwordrt">
                  <img src="{{ custom_asset('eye-close.png') }}" id="togglePasswordrt" class="eye-show">
                  <div class="login-line margin-bot20"></div>
                  <div class="clr"></div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                  <div class="login-name">Confim Password</div>
                  <input type="password" name="password" class="input-pasword" required="" id="id_passwordfc">
                  <img src="{{ custom_asset('eye-close.png') }}" id="togglePasswordfc" class="eye-show">
                  <div class="login-line margin-bot20"></div>
                  <div class="clr"></div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                  <input type="submit" value="Submit" class="btn-login">
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>
         </div>
         <!--  End Forget Password POPUP-->
         <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center margin-bot20">
            <a href="#" title="Login Apple"><img src="{{ custom_asset('login-apple') }}" alt=""/></a>
            <a href="#" title="Login Gmail" class="padding-left15"><img src="{{ custom_asset('login-gmail.png') }}" alt=""/></a>
            <a href="#" title="Login Facekook"><img src="{{ custom_asset('login-facebook.png') }}" alt=""/></a>
            <div class="clr"></div>
         </div> -->
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
            Don’t have account? <span class="sign-link"><a href="{{route('register')}}">{{ trans('lang.sign_up') }}</a></span>
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
   var addmodal = document.getElementById( "forget" );
   var addbtn = document.getElementById( "btn-forget" );
   var addspan = document.getElementById( "close" );
   addbtn.onclick = function () {
   
   	addmodal.style.display = "block";
   }
   
   addspan.onclick = function () {
   	addmodal.style.display = "none";
   }
   
   delspan.onclick = function () {
   	delmodal.style.display = "none";
   }
   
   window.onclick = function ( event ) {
   	if ( event.target == modal ) {
   		modal.style.display = "none";
   	}
   }
</script>
<!-- <script>
   const togglePassword =
   	document.querySelector( '#togglePassword' );
   
   const password = document.querySelector( '#id_password' );
   
   togglePassword.addEventListener( 'click', function ( e ) {
   
   	// Toggle the type attribute
   	const type = password.getAttribute(
   		'type' ) === 'password' ? 'text' : 'password';
   	password.setAttribute( 'type', type );
   
   	// Toggle the eye slash icon
   	if ( togglePassword.src.match(
   			"{{ custom_asset('eye-open.png') }}" ) ) {
   		togglePassword.src =
   			"{{ custom_asset('eye-close.png') }}";
   	} else {
   		togglePassword.src =
   			"{{ custom_asset('eye-open.png') }}";
   	}
   } );
</script> -->
<script>
   const togglePasswordrt =
   	document.querySelector( '#togglePasswordrt' );
   
   const passwordrt = document.querySelector( '#id_passwordrt' );
   
   togglePasswordrt.addEventListener( 'click', function ( e ) {
   
   	// Toggle the type attribute
   	const type = passwordrt.getAttribute(
   		'type' ) === 'password' ? 'text' : 'password';
   	passwordrt.setAttribute( 'type', type );
   
   	// Toggle the eye slash icon
   	if ( togglePasswordrt.src.match(
   			"{{ custom_asset('eye-open.png') }}" ) ) {
   		togglePasswordrt.src =
   			"{{ custom_asset('eye-close.png') }}";
   	} else {
   		togglePasswordrt.src =
   			"{{ custom_asset('eye-open.png') }}";
   	}
   } );
</script>
<script>
   const togglePasswordfc =
   	document.querySelector( '#togglePasswordfc' );
   
   const passwordfc = document.querySelector( '#id_passwordfc' );
   
   togglePasswordfc.addEventListener( 'click', function ( e ) {
   
   	// Toggle the type attribute
   	const type = passwordfc.getAttribute(
   		'type' ) === 'password' ? 'text' : 'password';
   	passwordfc.setAttribute( 'type', type );
   
   	// Toggle the eye slash icon
   	if ( togglePasswordfc.src.match(
   			"./images/eye-open.png" ) ) {
   		togglePasswordfc.src =
   			"./images/eye-close.png";
   	} else {
   		togglePasswordfc.src =
   			"./images/eye-open.png";
   	}
   } );
</script>
<script>
   $.ajaxSetup({
   		headers: {
   			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   		}
   });
   $('.login').on('click',function(e){
   	e.preventDefault();
          const url = "{{ route('login.post') }}";
   	const email = $('.email').val();
   	const password = $('.password').val();
          let data = new FormData();
          data.append("email",email);
          data.append("password",password);
          ajaxPost(url,data,'.contact-success','.contact-error');
   
   });
   function  swalAlert(message){
   	Swal.fire({
   		icon: 'error',
   		title: 'Oops...',
   		text: message
   	});
   }
</script>
@endsection