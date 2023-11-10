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

	$(document).on("change",'.sort_by',function(){
		sort_by = $(this).val();
		getEventsListing();
	});

	$(document).ready(function(){
		getEventsListing();
	})
	function getEventsListing(){
		ajaxGet("{{route('event-calenders.ajax')}}",{sort_by},".events",responseType='html');
	}
</script>
@endsection
