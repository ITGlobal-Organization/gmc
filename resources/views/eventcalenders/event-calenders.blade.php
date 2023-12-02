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
            getDirectoryListing();
        })

        $(document).on('click','.next',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == totalPages){
            filters.start  = 1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-1]').addClass("page-active");
            getDirectoryListing();
        }else{
             filters.start = parseInt(filters.start)+1;
            $('.page').removeClass('page-active')
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getDirectoryListing();
        }
    })

    $(document).on('click','.prev',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == 1){
            filters.start  = totalPages;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ totalPages + ']').addClass("page-active");
            getDirectoryListing();
        }else{
             filters.start  = parseInt( filters.start )-1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getDirectoryListing();
        }
    })
</script>


<script>
  $(function (e) {
    var calendar = $("#calendar").calendarGC({
      dayBegin: 0,
      prevIcon: '&#x3c;',
      nextIcon: '&#x3e;',
      onPrevMonth: function (e) {
        console.log("prev");
        console.log(e);
      },
      onNextMonth: function (e) {
        console.log("next");
        console.log(e);
      },
      events: getHoliday(),
      onclickDate: function (e, data) {
        console.log(e, data);
      }
    });
  });

  function getHoliday() {
    var d = new Date();
    var totalDay = new Date(d.getFullYear(), d.getMonth(), 0).getDate();
    var events = [];

    for (var i = 1; i <= totalDay; i++) {
      var newDate = new Date(d.getFullYear(), d.getMonth(), i);
      if (newDate.getDay() == 0) {   //if Sunday
        events.push({
          date: newDate,
          eventName: "CHAS Launches Biggest Ever Festive Appeal After 25% Increase In Family Support",
          className: "badge",
          onclick(e, data) {
            console.log(data);
          },
          dateColor: "red"
        });
      }
      if (newDate.getDay() == 3) {   //if Saturday
        events.push({
          date: newDate,
          eventName: "Build Your Skill: Intermediate Excel #2",
          className: "badge badge2",
          onclick(e, data) {
            console.log(data);
          },
          dateColor: "red"
        });
      }
		
		
	 if (newDate.getDay() == 5) {   //if Saturday
        events.push({
          date: newDate,
          eventName: "Craighead Wind Farm Community Consultation Invitation",
          className: "badge badge3",
          onclick(e, data) {
            console.log(data);
          },
          dateColor: "red"
        });
      }


    }
    return events;
  }
  getHoliday()
</script>
@endsection
