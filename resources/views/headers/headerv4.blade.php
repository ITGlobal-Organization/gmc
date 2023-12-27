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
			<h1 class="white">Perthshire Chamber of Commerce</h1>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner2.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h1 class="white">Perthshire Chamber of Commerce</h1>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner3.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h1 class="white">Perthshire Chamber of Commerce</h1>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner4.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h1 class="white">Perthshire Chamber of Commerce</h1>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner5.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h1 class="white">Perthshire Chamber of Commerce</h1>
		</div>
	 </div>
    <div class="item">
	<a href="#"><img src="{{ custom_asset('banner6.jpg') }}" alt="First slide" width="100%"></a>
	  <div class="banner-text">
			<h1 class="white">Perthshire Chamber of Commerce</h1>
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
      <li><a href="{{ route('home') }}"><i class="fas fa-home" style="color: #ffffff;"></i>&nbsp; Home &nbsp;&nbsp;|</a></li>
      @php
         $User = auth()->user();
      @endphp

      @if(!isset($User))
       <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt" style="color: #ffffff;"></i>&nbsp; Login &nbsp;&nbsp;|</a></li>
      <li><a href="{{ route('register') }}"><i class="fas fa-user" style="color: #ffffff;"></i>&nbsp; Join</a></li>
      @else
        <li><a href="{{ route('user.dashboard') }}"><i class="fas fa-user" style="color: #ffffff;"></i>&nbsp; Member Dashboard &nbsp;&nbsp;|</a></li>
      <li><a href="{{ route('logout') }}"><i class="fas fa-sign-in-alt" style="color: #ffffff;"></i>&nbsp; Logout</a></li>
      @endif
    </ul>
  </div>

</div>

<!--Start Nav Mobile and Table-->
<div class="block">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div id="list2">
     @php
         $User = auth()->user();
      @endphp
    <ul>
      <li><a href="{{ route('home') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.home')}}</a></li>
       @if(!isset($User))
      <li><a href="{{ route('login') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.login')}}</a></li>
	  <li><a href="{{ route('register') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.join')}}</a></li>
	  @else
	       <li><a href="{{ route('user.dashboard') }}"><i class="fa fa-chevron-right"></i>  Member Dashboard</a></li>
	  <li><a href="{{ route('logout') }}"><i class="fa fa-chevron-right"></i> {{ 'Logout'}}</a></li>
	  @endif


    <li><a href="{{ route('blogs.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.news')}}</a></li>
    <li><a href="{{ route('site-pages','benifits') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.benifits')}}</a></li>
    <li><a href="{{ route('directories.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.directories')}}</a></li>
    <li><a href="{{ route('space-finders.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.space_finders')}}</a></li>
    <li><a href="{{ route('offers.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.offers')}}</a></li>
	<li><a href="{{ route('event-calenders.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.eventcalenders')}}</a></li>
	<li><a href="{{ route('platinum-partners.index') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.platiniumpartners')}}</a></li>
	<li><a href="https://pcjh.co.uk/"><i class="fa fa-chevron-right"></i> {{ trans('lang.jobshub')}}</a></li>
	<li><a href="{{ route('site-pages','about-us') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.about_us')}}</a></li>
	<li><a href="{{ route('site-pages','international') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.international')}}</a></li>
	<li><a href="{{ route('site-pages','mentoring') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.mentoring')}}</a></li>
	<li><a href="{{ route('site-pages','contact-us') }}"><i class="fa fa-chevron-right"></i> {{ trans('lang.contact')}}</a></li>
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
      <li><a href="{{ route('home') }}">Home</a></li>
      <!-- <li><a href="{{ route('login') }}"> {{ trans('lang.login')}}</a></li>
	  <li><a href="{{ route('register') }}"> {{ trans('lang.join')}}</a></li> -->
      <li><a href="{{ route('blogs.index') }}">{{ trans('lang.news')}}</a></li>
       <li><a href="{{ route('site-pages','benifits') }}">{{ trans('lang.benifits')}}</a></li>
      <li><a href="{{ route('directories.index') }}">{{ trans('lang.directories')}}</a></li>
      <li><a href="{{ route('space-finders.index') }}">{{ trans('lang.space_finders')}}</a></li>
      <li><a href="{{ route('event-calenders.index') }}">{{ trans('lang.eventcalenders')}}</a></li>
      <li><a href="{{ route('platinum-partners.index') }}">{{ trans('lang.platiniumpartners')}}</a></li>
      <li><a href="https://pcjh.co.uk/">{{ trans('lang.jobshub')}}</a></li>
	  <li><a href="{{ route('site-pages','about-us') }}">{{ trans('lang.about_us')}}</a></li>
	  <li><a href="{{ route('site-pages','international') }}">{{ trans('lang.international')}}</a></li>
		<li><a href="{{ route('site-pages','mentoring') }}">{{ trans('lang.mentoring')}}</a></li>
		<li><a href="{{ route('site-pages','contact-us') }}">{{ trans('lang.contact')}}</a></li>
    </ul>
  </div>
<div class="clr"></div>

</div>
<div class="clr"></div>
</div>
<!--End Nav Desktop Area-->

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
