@if($ShowCart)
<a href="#"><img src="{{ $CartImg }}"  class="block"/></a>
<div class="cart-text block">{{ $CartCount}}</div>

<div class="icon-genral none">
	<a href="#" title="Cart"><i class="far fa-shopping-bag" style="color: #ffffff;"></i></a>
</div>
@endif