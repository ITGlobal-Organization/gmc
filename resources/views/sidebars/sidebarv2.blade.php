<div class="text-right menu-set">
<div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


<div id="list7">

	@php
		$Menus = config('menu.'.strtolower($User->roles[0]->name).'.sidebar')

	@endphp
    @dd($Menus);
    <ul>
		@foreach($Menus as $menu)
		<li>
			<a href="{{ prefix_route($menu['link']) }}"><img src="{{ custom_asset($menu['icon']) }}" alt=""/ width="20">&nbsp;&nbsp;{{ trans('lang.'.$menu['name']) }}</a>
		</li>
		@endforeach


    </ul>
    <div class="clr"></div>
</div>




</div>
<span class="menu-mobile" onclick="openNav()"><span class="left-menu">Menu &nbsp;</span>&#9776;</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "320px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
