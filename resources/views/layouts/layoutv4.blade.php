<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="robots" content="noindex,nofollow"> -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ custom_asset('bootstrap.css','css') }} " rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ custom_asset('style.css','css') }}" rel="stylesheet" type="text/css">
	<link href="{{ custom_asset('extra.css','css') }}" rel="stylesheet" type="text/css">


	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{ custom_asset('favicon.jpg') }}">
	<link rel="stylesheet" type="text/css" href="{{ custom_asset('font-awesome.min.css','css') }}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="{{ custom_asset('owl.carousel.css','css') }}" rel="stylesheet" type="text/css">
    <link href="{{ custom_asset('owl.theme.css','css') }}" rel="stylesheet" type="text/css">
	<link href="{{ custom_asset('easy-responsive-tabs.css','css') }}" rel="stylesheet" type="text/css">

	<title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
</head>
<body>
<!--Start Header-->
@php
	$User = auth()->user();
@endphp

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	@include('headers.headerv6',[
		'User' => $User
	]);
</div>

<!--End Header-->


<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
@include('components.loader')
@yield('content')
</div>
<!--End Middle-->

<!--Start Footer-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
@include('footers.footerv2');
</div>
<!--End Footer-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
<script src="{{ custom_asset('common.js','scripts')}}"></script>
<script src="{{ custom_asset('owl.carousel.js','scripts') }}"></script>
<script src="{{ custom_asset('utils.js','scripts') }}"></script>

@yield('scripts')

</body>
</html>
