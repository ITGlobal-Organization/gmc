@extends('layouts.auth')
@section('content')

    <!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding ">
    <div class="middle mtb-60">

        <h1 class="text-center mb-40">{{ trans('lang.events_calendar') }}</h1>
        <div class="success"></div>
        <!--Start search Area-->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 border padding border">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border text-right">
                <div class="addnew-btn clear-filters"><a href="#">Clear Filters</a></div>
                <div class="clr"></div>
            </div>

            {{-- <div class="search-oh search-box1">
                <input type="image" class="oh-btn" img="" src="{{ asset('media/brn-search.png') }}">
                <input type="text" placeholder="Search" class="oh-input search-box">
                <div class="clr"></div>
            </div> --}}
            <div class="clr"></div>
        </div>
        <!--End search Area-->

        <!--Start calendar Area-->
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 border padding border">

            <div class="search-ohch">
                <input class="ohch-input" name="date" id="start-date" placeholder="Date for visit DD-MM-YYYY"
                    required="required" type="date">
                <div class="clr"></div>
            </div>

            <span class="ab-to">TO</span>

            <div class="search-ohch">
                <input class="ohch-input" name="date" id="end-date" placeholder="Date for visit DD-MM-YYYY"
                    required="required" type="date">
                <div class="clr"></div>
            </div>

            <div class="clr"></div>
        </div>
        <!--Start calendar Area-->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding border mb-25"></div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border text-right">
            <div class="addnew-btn"><a href="{{route('user.events.create')}}">{{ trans('messages.add_new_msg',[
                'attribute' => trans('lang.event')
            ]) }}</a></div>
            <div class="clr"></div>
        </div>
        <div class="events"></div>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>



    <!--End Middle-->
@endsection
@section('scripts')
    <script>
    let filters = {
        start_date:"",
        end_date:"",
        order_by:"created_at",
        order:"desc",

    }

	$(document).on("change",'.sort_by',function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getEventsListing();
	});
        $(document).ready(function() {
            getEventsListing();
        });
        $(document).on('keyup', '.search-box', function() {
            search = $(this).val();
              
            setTimeout(() => {
            // console.log(filters.search)
                if (search.length > 2) {
                    ajaxGet("{{ route('user.event-calenders.search') }}", {
                        search
                    }, ".events", responseType = 'html');
                } 
            }, 1000);
            // setInterval(() => {
                
            // }, 3000);
            
        });
        $(document).on('click','.edit' ,function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "{{ route('user.events.edit', '') }}" + "/" + id;
            // ajaxGet("{{ route('user.events.ajax') }}",{id:id},".events",responseType = 'html');
        });
        $(document).on('click', '.delete',function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let url = "{{ route('user.events.destroy', '') }}" + "/" + id;
            destroy(url);
        });

        $(document).on('click', '.clear-filters',function(e) {
            e.preventDefault();
            getEventsListing();
        });

        $(document).on('change', '#end-date', function(ev) {
            start_date = $('#start-date').val();
            end_date = $('#end-date').val();
            ajaxGet("{{ route('user.event-calenders.search') }}", {
                start_date: start_date,
                end_date: end_date
            }, ".events", responseType = 'html');
        });

        function getEventsListing() {
            ajaxGet("{{ route('user.events.listing') }}",
                filters
            , ".events", responseType = 'html');
        }
    </script>
    {{-- <link rel="stylesheet" href="{{asset('css/calendar-gc.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/calendar-gc.min.js')}}"></script>
    <script>
        $(function(e) {
            var calendar = $("#calendar").calendarGC({
                dayBegin: 0,
                prevIcon: '&#x3c;',
                nextIcon: '&#x3e;',
                onPrevMonth: function(e) {
                    console.log("prev");
                    console.log(e);
                },
                onNextMonth: function(e) {
                    console.log("next");
                    console.log(e);
                },
                events: getHoliday(),
                onclickDate: function(e, data) {
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
                if (newDate.getDay() == 0) { //if Sunday
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
                if (newDate.getDay() == 3) { //if Saturday
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


                if (newDate.getDay() == 5) { //if Saturday
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

    <link href="{{asset('css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/easyResponsiveTabs.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            // Child Tab
            $('#ChildVerticalTab_1').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1', // The tab groups identifier
                activetab_bg: '#fff', // background color for active tabs in this group
                inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
            });

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script> --}}
@endsection
