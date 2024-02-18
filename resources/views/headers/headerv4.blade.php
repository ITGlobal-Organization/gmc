<!--Start Banner Area-->
<section class="hero-slider hero-style">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://staging.perthshirecc.co.uk/media/banner2.jpg">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title text-center">
              <h2 class="white">Perthshire Chamber of Commerce</h2>
            </div>

            <div class="clearfix"></div>
          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->

      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://staging.perthshirecc.co.uk/media/banner2.jpg">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>Perthshire Chamber of Commerce</h2>
            </div>

            <div class="clearfix"></div>

          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->


      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://staging.perthshirecc.co.uk/media/banner3.jpg">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>Perthshire Chamber of Commerce</h2>
            </div>

            <div class="clearfix"></div>

          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->



      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://staging.perthshirecc.co.uk/media/banner4.jpg">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>Perthshire Chamber of Commerce</h2>
            </div>

            <div class="clearfix"></div>

          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->


      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://staging.perthshirecc.co.uk/media/banner5.jpg">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>Perthshire Chamber of Commerce</h2>
            </div>

            <div class="clearfix"></div>

          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->


      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="https://staging.perthshirecc.co.uk/media/banner6.jpg">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2>Perthshire Chamber of Commerce</h2>
            </div>

            <div class="clearfix"></div>

          </div>
        </div>
        <!-- end slide-inner -->
      </div>
      <!-- end swiper-slide -->

    </div>
    <!-- end swiper-wrapper -->

    <!-- swipper controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
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
            <li><a href="{{ route('user.dashboard') }}"><i class="fas fa-user" style="color: #ffffff;"></i>&nbsp;  {{ trans('lang.member_dashboard')}}&nbsp;&nbsp;|</a></li>
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
               <li><a href="{{ route('user.dashboard') }}"><i class="fa fa-chevron-right"></i>   {{ trans('lang.member_dashboard')}}</a></li>
          <li><a href="{{ route('logout') }}"><i class="fa fa-chevron-right"></i> {{ 'Logout'}}</a></li>
          @endif
        @php
            $Sidebar = config('site_config.sidebar.pages');
        @endphp
        @foreach ( $Sidebar as $sidebar)
        <li>
            @if($sidebar['check_login'] == true)
            @if(isset($User))
               <a href="{{ route($sidebar['route']) }}"><i class="fa fa-chevron-right"></i> {{ trans($sidebar['name'])}}</a>
               @endif
            @else
                @if($sidebar['static_route'] == "")
                    <a href="{{ ($sidebar['parameter'] == '') ? route($sidebar['route']) :  route($sidebar['route'],$sidebar['parameter'])}}"><i class="fa fa-chevron-right"></i> {{ trans($sidebar['name'])}}</a>
                @else
                    <a href="{{ $sidebar['static_route'] }}"><i class="fa fa-chevron-right"></i> {{ trans($sidebar['name'])}}</a>
                @endif
            @endif
        </li>
        @endforeach

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
    <div class="middle-header">
     <div class="list2">
        @php
             $User = auth()->user();

          @endphp
        <ul class="list2">
            <li><a href="{{ route('home') }}">{{ trans('lang.home')}}</a></li>

           @php
           $Sidebar = config('site_config.sidebar.pages');
       @endphp
       @foreach ( $Sidebar as $sidebar)
       <li>
           @if($sidebar['check_login'] == true)
            @if(isset($User))
               <a href="{{ route($sidebar['route']) }}"> {{ trans($sidebar['name'])}}</a>
               @endif
           @else
               @if($sidebar['static_route'] == "")
                   <a href="{{ ($sidebar['parameter'] == '') ? route($sidebar['route']) :  route($sidebar['route'],$sidebar['parameter'])}}"> {{ trans($sidebar['name'])}}</a>
               @else
                   <a href="{{ $sidebar['static_route'] }}"> {{ trans($sidebar['name'])}}</a>
               @endif
           @endif
       </li>
       @endforeach


        </ul>
      </div>
    <div class="clr"></div>

    </div>
    <div class="clr"></div>
    </div>
    <!--End Nav Desktop Area-->


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel="stylesheet" href="{{custom_asset('style-banner.css','css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">

     <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    {{-- <script  src="{{asset('js/banner-script.js')}}"></script> --}}
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "300px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
