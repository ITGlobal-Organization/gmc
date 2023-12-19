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
	let filters = {
		start:1,
		order_by:"",
        order:"",
	}

	$(document).on("change",'.sort_by',function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getBlogsListing();
	});

	$(document).ready(function(){
		getBlogsListing();
	})
	function getBlogsListing(){
		ajaxGet("{{route('blogs.ajax')}}",filters,".blogs",responseType='html');
	}

    let paginationConfig = {
        renderFunction:getBlogsListing
    }
</script>

<script src="{{ custom_asset('pagination.js','scripts')}}"></script>
@endsection
 