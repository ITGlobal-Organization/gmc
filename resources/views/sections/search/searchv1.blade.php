<!--Start Search Box Desktop and Tablet-->
<div class="col-xs-2 col-sm-6 col-md-6 col-lg-6 boeder block">
	<div class="search-box">
		<input type="image" class="search-btn" img="" src="{{ custom_asset('brn-search.png') }}">
		<input type="text" placeholder="Search Product" class="search-input">
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
</div>
<!--End Search Box Desktop and Tablet-->


<!--Start Search Box Mobile-->
<div class="col-xs-2 col-sm-6 col-md-6 col-lg-6 boeder none">
   <a href="#" class="show_hide1" title="{{ trans('lang.search')}}">
      <div class="icon-genral">
         <i class="fas fa-search"></i>
      </div>
   </a>
   <div class="clr"></div>
</div>
<div class="sliding-search">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
      <div class="search-box">
         <input type="image" class="search-btn" img="" src="{{ custom_asset('brn-search.png') }}">
         <input type="text" placeholder="{{ trans('lang.search')}} {{ trans('lang.product')}}" class="search-input">
         <div class="clr"></div>
      </div>
   </div>
   <div class="clr"></div>
</div>
</div>
<!--End Search Box Mobile-->

