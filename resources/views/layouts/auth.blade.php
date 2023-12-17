<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ custom_asset('bootstrap.css','css') }} " rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ custom_asset('style.css','css') }}" rel="stylesheet" type="text/css">
	<link href="{{ custom_asset('extra.css','css') }}" rel="stylesheet" type="text/css">

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



    <link href="{{ custom_asset('owl.carousel.css','css') }}" rel="stylesheet" type="text/css">
    <link href="{{ custom_asset('owl.theme.css','css') }}" rel="stylesheet" type="text/css">

	<link href="{{ custom_asset('easy-responsive-tabs.css','css') }}" rel="stylesheet" type="text/css">


	<!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.js') }}"></script>  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
@include('components.loader')
</div>



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	<div class="middle mtb-60">
		<div class="col-2 text-center mt-10"></div>
		@if(\Request::route()->getName() =='user.dashboard')
		<h1 class="mb-40 text-center">{{ trans('messages.welcome_msg',[
		'attribute' => $User->first_name
	])}}</h1>
			@endif
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border padding">
		@include('sidebars.sidebarv4')
	</div>

	   <!--Start Middle-->
	   <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 border padding">
        	@yield('content')
       </div>
	</div>

       <!--End Middle-->
</div>

<!--Start Left Side-->





<!--End Middle-->

<!--Start Footer-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
@include('footers.footerv2');
</div>
<!--End Footer-->


    <!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.min.js') }}"></script> -->


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script src="{{ custom_asset('common.js','scripts')}}"></script>
<script src="{{ custom_asset('owl.carousel.js','scripts') }}"></script>
<script src="{{ custom_asset('utils.js','scripts') }}"></script>

<script>
		// $(document).ready(function(){
		// 	$('select').select2();
		// })

	</script>
@yield('scripts')

</body>
</html>
