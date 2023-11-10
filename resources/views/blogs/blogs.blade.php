@extends('layouts.layoutv2')
@section('content')
	<!--Start Middle-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<div class="middle mtb-60">

			<h1 class="mb-40 text-center">{{ trans('lang.news')}} {{trans('lang.categories')}}</h1>

			<div class="blogs">

			</div>



			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<!--End Middle-->

@endsection
@section('scripts')

<script>

	sort_by = "";

	$(document).on("change",'.sort_by',function(){
		sort_by = $(this).val();
		getBlogsListing();
	});

	$(document).ready(function(){
		getBlogsListing();
	})
	function getBlogsListing(){
		ajaxGet("{{route('blogs.ajax')}}",{sort_by},".blogs",responseType='html');
	}
</script>
@endsection
