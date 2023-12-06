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

	$(document).on('click','.page',function(e){
            e.preventDefault();
            $('.page').removeClass("page-active");
            $(this).addClass("page-active");
            filters.start = $(this).text();
            getBlogsListing();
        })

        $(document).on('click','.next',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == totalPages){
            filters.start  = 1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-1]').addClass("page-active");
            getBlogsListing();
        }else{
             filters.start = parseInt(filters.start)+1;
            $('.page').removeClass('page-active')
            $('.pagination a[data-page=page-'+ filters.start+ ']').addClass("page-active");
            getBlogsListing();
        }
    })

    $(document).on('click','.prev',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == 1){
            filters.start  = totalPages;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ filters.start + ']').addClass("page-active");
            getBlogsListing();
        }else{
             filters.start  = parseInt( filters.start )-1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ filters.start + ']').addClass("page-active");
            getBlogsListing();
        }
    })
</script>
@endsection
 