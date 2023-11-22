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
<script>

	sort_by = "";
    search ="";

	$(document).on("change",'.sort_by',function(){
		sort_by = $(this).val();
		getEventsListing();
	});

	$(document).ready(function(){
		getEventsListing();
	})
    $(document).on('keyup','.search-box',function(){
        search = $(this).val();
        if(search.length > 2){
            ajaxGet("{{route('event-calenders.search')}}",{search},".events",responseType='html');
        }
    });
    $(document).on('change', '#end-date',function (ev) {
        start_date = $('#start-date').val();
        end_date = $('#end-date').val();
        ajaxGet("{{route('event-calenders.search')}}",{start_date:start_date,end_date:end_date},".events",responseType='html');
    });
	function getEventsListing(){
		ajaxGet("{{route('event-calenders.ajax')}}",{sort_by},".events",responseType='html');
	}
</script>
@endsection
