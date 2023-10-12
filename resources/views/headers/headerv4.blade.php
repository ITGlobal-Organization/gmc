<!--Start Top Header Area-->
<div id="London" class="w3-container w3-display-container city">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
Limited time offer! Get up to <i><b>40% OFF</b></i> on all products
</div>
<!--End Top Header Area-->

<!--Start Header Area-->
<div class="middle">

<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 boeder margin-bot5">
  <a href="#"><img src="images/logo.png" alt="" title=""/></a>
</div>

<!--Start Search Box Desktop and Tablet-->
<div class="col-xs-2 col-sm-6 col-md-6 col-lg-6 boeder block">
<div class="search-box">
<input type="image" class="search-btn" img="" src="{{custom_asset('brn-search.png')}}">
<input type="text" placeholder="Search Product" class="search-input">
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
<!--End Search Box Desktop and Tablet-->


<!--Start Search Box Mobile-->
<div class="col-xs-2 col-sm-6 col-md-6 col-lg-6 boeder none">
<a href="#" class="show_hide1" title="Search">
<div class="icon-genral">
<i class="fas fa-search"></i>
</div>
</a>
<div class="clr"></div>
</div>
<div class="sliding-search">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
			<div class="search-box">
				<input type="image" class="search-btn" img="" src="{{custom_asset('brn-search.png')}}">
<input type="text" placeholder="Search Product" class="search-input">
<div class="clr"></div>
			</div>

		</div>
		<div class="clr"></div>
  </div>
<!--End Search Box Mobile-->

<!--Start Login Desktop and Mobile Tablet-->
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 boeder text-center">
<div class="login-btn block"><a href="#">Login</a></div>
<div class="icon-genral none">
<a href="#" title="Login"><i class="far fa-sign-in" style="color: #ffffff;"></i></a>
</div>
</div>
<!--End Login Desktop and Mobile Tablet-->

<!--Start Cart Desktop and Tablet-->
<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 boeder text-center margin-top16 text-center">
<a href="#"><img src="{{custom_asset('cart.png')}}"  class="block"/></a>
<div class="cart-text block">05</div>

<div class="icon-genral none">
<a href="#" title="Cart"><i class="far fa-shopping-bag" style="color: #ffffff;"></i></a>
</div>
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
