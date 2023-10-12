<!--Start Top Header Area-->
<div id="London" class="w3-container w3-display-container city">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
{!! trans('content.top-bar.heading') !!}
</div>
<!--End Top Header Area-->

<!--Start Header Area-->
<div class="middle">

<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 boeder margin-bot5">
  <a href="{{ route('login') }}"><img src="{{ custom_asset('logo.png') }}" alt="" title=""/></a>
</div>

@include('sections.search.searchv1')


@if(isset($User))
<!--Start Notification-->
<div class="notification-icon">
 	<a href="#"><img src="{{ custom_asset('notification-icon.png') }}"  alt=""/></a>
</div>	
<!--End Notification -->
	
	
<!--Start Login Desktop and Mobile Tablet-->
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 boeder text-right">
	@include('sections.auth.profile-dropdown')
</div>
<!--End Login Desktop and Mobile Tablet-->
@else
<!--Start Login Desktop and Mobile Tablet-->
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 boeder text-center">
	@include('sections.auth.auth-btn')
</div>
<!--End Login Desktop and Mobile Tablet-->
@endif


<!--Start Cart Desktop and Tablet-->
<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 boeder text-center margin-top16 text-center">
	@include('sections.cart.cart-top',[
		'ShowCart' => true,
		'CartCount' => numberFormat(05),
		'CartImg' => custom_asset('cart.png')
	])
</div>
<!--End Cart Desktop and Tablet-->


<div class="clr"></div>
</div>
<!--End Header Area-->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
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
