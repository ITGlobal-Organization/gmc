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
	


	
<!--Start Cart Desktop and Tablet-->
<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 boeder text-center margin-top16 text-center">
<a href="#"><img src="images/cart.png"  class="block"/></a>
  <div class="cart-text block">05</div>
	
  <div class="icon-genral none">
    <a href="#" title="Cart"><i class="far fa-shopping-bag" style="color: #ffffff;"></i></a>
  </div>
</div>
<!--End Cart Desktop and Tablet-->


<div class="clr"></div>
</div>
<!--End Header Area-->
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


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script> 