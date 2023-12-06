@extends('layouts.layoutv2')

@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <div class="events">

			      </div>
            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
@section('scripts')
<link rel="stylesheet" href="{{ custom_asset('calendar-gc.css','css') }}">	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ custom_asset('calendar-gc.min.js','scripts') }}"></script>
<link href="{{ custom_asset('easy-responsive-tabs.css','css') }}" rel="stylesheet" type="text/css">
<script src="{{ custom_asset('easyResponsiveTabs.js','scripts') }}"></script>
<script>

	// sort_by = "";
    // search ="";
    let filters = {
        start_date:"",
        end_date:"",
        order_by:"",
        order:"",

    }

	$(document).on("change",'.sort_by',function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getEventsListing();
	});

	$(document).ready(function(){
		getEventsListing();
  
 
	})
    $(document).on('keyup','.search-box',function(){
        filters.search = $(this).val();
        setTimeInterval(() => {
            getEventsListing();
        },2000)
    });
    $(document).on('change', '#end-date',function (ev) {
        filters.start_date = $('#start-date').val();
        filters.end_date = $('#end-date').val();
        getEventsListing();
    });
	function getEventsListing(){
		ajaxGet("{{route('event-calenders.ajax')}}",filters,".events",responseType='html');
	}


        // Pagination
        $(document).on('click','.page',function(e){
            e.preventDefault();
            $('.page').removeClass("page-active");
            $(this).addClass("page-active");
            filters.start = $(this).text();
            getEventsListing();
        })

        $(document).on('click','.next',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == totalPages){
            filters.start  = 1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-1]').addClass("page-active");
            getEventsListing();
        }else{
             filters.start = parseInt(filters.start)+1;
            $('.page').removeClass('page-active')
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getEventsListing();
        }
    })

    $(document).on('click','.prev',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == 1){
            filters.start  = totalPages;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ totalPages + ']').addClass("page-active");
            getEventsListing();
        }else{
             filters.start  = parseInt( filters.start )-1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getEventsListing();
        }
    })
</script>






@endsection
