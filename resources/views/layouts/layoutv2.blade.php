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
	
	
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="./images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="{{ custom_asset('owl.carousel.css','css') }}" rel="stylesheet" type="text/css">
    <link href="{{ custom_asset('owl.theme.css','css') }}" rel="stylesheet" type="text/css">

	<title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
</head>
<body>
<!--Start Header-->
@php 
	$User = auth()->user();
@endphp

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	@include('headers.headerv2',[
		'User' => $User
	]);
</div>

<!--End Header-->

<!-- Start SideBar -->
@if(isset($User))
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
	@include('sidebars.sidebarv2');
</div>
@endif
<!-- End SideBar -->
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
<script src="{{ custom_asset('common.js','scripts')}}"></script>
<script src="{{ custom_asset('owl.carousel.js','scripts') }}"></script>
<script src="{{ custom_asset('utils.js','scripts') }}"></script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show-head");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn-head')) {
    var dropdowns = document.getElementsByClassName("dropdownhead-contenthead");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-head')) {
        openDropdown.classList.remove('show-head');
      }
    }
  }
}
</script>

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script> -->
<script type="text/javascript">
	$( document ).ready( function () {


		$( ".sliding-search" ).hide();
		$( ".show_hide1" ).show();

		$( '.show_hide1' ).click( function () {
			$( ".sliding-search" ).slideToggle();
		} );

	} );
</script>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script> 
@yield('scripts')

</body>
</html>
