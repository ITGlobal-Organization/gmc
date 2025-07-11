<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@php
	$ProtectedRoutes = config('site_config.protected-routes');
	@endphp
	@if(in_array(\Route::currentRouteName(),$ProtectedRoutes))
	<meta name="robots" content="noindex,nofollow">
	@endif
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ custom_asset('bootstrap.css','css') }} " rel="stylesheet" type="text/css">
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
	<link href="{{ custom_asset('style.css','css') }}" rel="stylesheet" type="text/css">
	<link href="{{ custom_asset('extra.css','css') }}" rel="stylesheet" type="text/css">
    <link  href="{{custom_asset('style-banner.css','css')}}" rel="stylesheet" type="text/css">

	<link href="{{ custom_asset('easy-responsive-tabs.css','css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset(config('site_config.assets.plugins').'select2/css/select2.css') }}" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{ custom_asset('favicon.jpg') }}">
	<link rel="stylesheet" type="text/css" href="{{ custom_asset('font-awesome.min.css','css') }}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


	<!-- PWA SETING -->
	<meta name="theme-color" content="#072557"/>
	<link rel="apple-touch-icon" href="{{ asset('pwa.png') }}">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link href="{{ custom_asset('owl.carousel.css','css') }}" rel="stylesheet" type="text/css">
    <link href="{{ custom_asset('owl.theme.css','css') }}" rel="stylesheet" type="text/css">
<!--
	<link href="{{ custom_asset('easy-responsive-tabs.css','css') }}" rel="stylesheet" type="text/css"> -->


	<!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.js') }}"></script>  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




	<title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
	<style>
        #installPrompt {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: #fff;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            text-align: center;
            display: none;
            z-index: 1000;
        }
        #installPrompt button {
            margin: 10px;
        }
    </style>
</head>
<body>
<!--Start Header-->
@php
	$User = auth()->user();
@endphp

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	@include('headers.headerv4',[
		'User' => $User
	]);
</div>

<!--End Header-->


<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<div id="installPrompt">
        <p>To install this app, tap the share icon (the box with an arrow) and then "Add to Home Screen".</p>
        <button class="btn btn-primary" id="dismiss">Don't ask again</button>
        <button class="btn btn-danger" id="close">Close</button>
    </div>
@include('components.loader')
@include('components.snackbar')
@yield('content')

</div>
<!--End Middle-->

<!--Start Footer-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
@include('footers.footerv2');
@include('modals.modal')
</div>
<!--End Footer-->




    <!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.min.js') }}"></script> -->








<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
	@php
		$User = auth()->user();
	@endphp
const blade_config = {
	baseUrl : "{{ config('app.url') }}",
	laravel_echo_port:'{{env("LARAVEL_ECHO_PORT")}}',
	user_id: "{{ isset($User)?$User->id:null }}",
}
</script>

<script src="{{ custom_asset('common.js','scripts')}}"></script>
<script src="{{ custom_asset('owl.carousel.js','scripts') }}"></script>
<!-- <script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script> -->
<script src="{{ custom_asset('utils.js','scripts') }}"></script>

<!-- <script src="https://cdn.socket.io/4.0.1/socket.io.min.js"></script> -->
<script src="{{ custom_asset('socket.js','js')}}"></script>


<script src="{{ custom_asset('banner-script.js','scripts') }}"></script>

<script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  }
   else {
     console.error("Service workers are not supported.");
  }

  if (navigator.userAgent.includes('iPhone') || navigator.userAgent.includes('iPad')) {
    // Show custom guide on how to "Add to Home Screen" on iOS
    if (!localStorage.getItem("addToHomeScreenDismissed")) {
        // Show the prompt if the user hasn't opted out
        document.getElementById("installPrompt").style.display = "block";
    }

    // Handle the "Don't ask again" button click
    document.getElementById("dismiss").addEventListener("click", function () {
        localStorage.setItem("addToHomeScreenDismissed", "true");
        document.getElementById("installPrompt").style.display = "none";
    });

    // Handle the "Close" button click
    document.getElementById("close").addEventListener("click", function () {
        document.getElementById("installPrompt").style.display = "none";
    });
	}
</script>
<!--  -->
@yield('scripts')

</body>
</html>
