<!--Start Banner Area-->
<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="item active">
	<a href="#"><img src="{{ custom_asset('banner1.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h2 class="white">Perthshire Chamber of Commerce</h2>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner2.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h2 class="white">Perthshire Chamber of Commerce</h2>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner3.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h2 class="white">Perthshire Chamber of Commerce</h2>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner4.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h2 class="white">Perthshire Chamber of Commerce</h2>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner5.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h2 class="white">Perthshire Chamber of Commerce</h2>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner6.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h2 class="white">Perthshire Chamber of Commerce</h2>
		</div>
	 </div>
  </div>
  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  
  </div>
<!--End Banner Area-->

<!--Start Header Top Area-->
<div class="header">

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-9 border padding">
 <a href="#"><img src="{{ asset(config('site_config.assets.logo')) }}" alt=""/></a>
</div>
	
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-3 border padding text-center">
<div class="top-nav none">


 <div id="list1">
    <ul class="list1">
      <li><a href="#"><i class="fas fa-home" style="color: #ffffff;"></i>&nbsp; Home &nbsp;&nbsp;|</a></li>
       <li><a href="#"><i class="fas fa-sign-in-alt" style="color: #ffffff;"></i>&nbsp; Login &nbsp;&nbsp;|</a></li>
      <li><a href="#"><i class="fas fa-user" style="color: #ffffff;"></i>&nbsp; Join</a></li>
    </ul>
  </div>
	
</div>

<!--Start Nav Mobile and Table-->
<div class="block">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div id="list2">
    <ul>
      <li><a href="{{ route('home') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.home')}}</a></li>
      <li><a href="{{ route('login') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.login')}}</a></li>
	  <li><a href="{{ route('register') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.join')}}</a></li>
    <li><a href="{{ route('blogs.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.blogs')}}</a></li>
      <li><a href="#"><i class="fa fa-chevron-right"></i> Benefits</a></li>
      <li><a href="#"><i class="fa fa-chevron-right"></i> Directory</a></li>
      <li><a href="#"><i class="fa fa-chevron-right"></i> Space Finder</a></li>
	        <li><a href="#"><i class="fa fa-chevron-right"></i> Events Calendar</a></li>
		      <li><a href="#"><i class="fa fa-chevron-right"></i> Platinum Partners</a></li>
		      <li><a href="#"><i class="fa fa-chevron-right"></i> Jobs Hub</a></li>
		      <li><a href="#"><i class="fa fa-chevron-right"></i> About</a></li>
		      <li><a href="#"><i class="fa fa-chevron-right"></i> International</a></li>
		      <li><a href="#"><i class="fa fa-chevron-right"></i> Mentoring</a></li>
		      <li><a href="#"><i class="fa fa-chevron-right"></i> Contact Us</a></li>
    </ul>
    <div class="clr"></div>
</div>

</div>
<img src="{{ custom_asset('icon-menu-mob.png') }}" alt="menu" title="Menu" onclick="openNav()" class="mbm">	
</div>
<!--End Nav Mobile and Table-->	
	
<div class="clr"></div>	
</div>

<div class="clr"></div>
</div>
<!--End Header Top Area-->

<!--Start Nav Desktop Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nav1 none">
<div class="middle">
 <div class="list2">
    <ul class="list2">
      <li><a href="#">Home</a></li>
       <li><a href="#">Benefits</a></li>
      <li><a href="#">Directory</a></li>
      <li><a href="#">Space Finder</a></li>
      <li><a href="#">Events Calendar</a></li>
      <li><a href="#">Platinum Partners</a></li>
      <li><a href="#">Jobs Hub</a></li>
	  <li><a href="#">About</a></li>
	  <li><a href="#">International</a></li>
	 <li><a href="#">Mentoring</a></li>
		<li><a href="#">Contact Us</a></li>
    </ul>
  </div>	
<div class="clr"></div>	
	
</div>
<div class="clr"></div>
</div>
<!--End Nav Desktop Area-->

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>