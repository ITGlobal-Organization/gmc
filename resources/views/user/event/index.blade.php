@extends('layouts.auth')
@section('content')

    <!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding ">
    <div class="middle mtb-60">

        <h1 class="text-center mb-40">{{ trans('lang.events_calendar') }}</h1>
        <div class="success"></div>
        <!--Start search Area-->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-7 border padding border">

            <div class="search-oh search-box1">
                <input type="image" class="oh-btn" img="" src="{{ asset('media/brn-search.png') }}">
                <input type="text" placeholder="Search" class="oh-input search-box">
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
        <!--End search Area-->

        <!--Start calendar Area-->
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-5 border padding border">

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

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border text-right">
            <div class="addnew-btn"><a href="{{route('user.events.create')}}">{{ trans('messages.add_new_msg',[
                'attribute' => trans('lang.event')
            ]) }}</a></div>
            <div class="clr"></div>
        </div>
    </div>
        {{-- <div class="events"></div> --}}
        <div class="row">
            <div id="container">
                <div id="parentHorizontalTab" class="parentHorizontalTab">
                     <div class="event-tabs-cal-list">
                     <ul class="resp-tabs-list hor_1 resp-tabs-list1">
                         <li id="box">&nbsp; {{ trans('lang.box-view')}} &nbsp;</li>
                         <li id="table">&nbsp; {{ trans('lang.table-view')}} &nbsp;</li>
                         <li id="calender">&nbsp; {{ trans('lang.calendar-view')}} &nbsp;</li>

                     </ul>
                     </div>
                   <div class="resp-tabs-container hor_1">
                     <!--Start Table View listing-->
                         <div class="events-box">


                        </div>
                        <!--End Table View listing-->
                      <!--Start Table View listing-->
                      <div class="events">
                      </div>
                      <!--End Table View listing-->
                      <!--Start Calendar View listing-->
                      <div>
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
                            <div id="calendar"></div>
                            <div class="clr"></div>
                         </div>
                         <div class="clr"></div>
                      </div>
                      <!--End Calendar View listing-->
                   </div>
                </div>
             </div>
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
<script src="{{ custom_asset('easyResponsiveTabs.js','scripts') }}"></script>
    <script>
    let filters = {
        start_date:"",
        end_date:"",
        order_by:"",
        order:"",
        view_type: ""

    }
        // tabs
        $(function (e) {

});
let parent = $( '#parentHorizontalTab' );
       console.log(parent)
       parent.easyResponsiveTabs( {
           type: 'default', //Types: default, vertical, accordion
           width: 'auto', //auto or any width like 600px
           fit: true, // 100% fit in a container
           tabidentify: 'hor_1', // The tab groups identifier
           activate: function ( event ) { // Callback function if tab is switched
               var $tab = $( this );
               var $info = $( '#nested-tabInfo' );
               var $name = $( 'span', $info );
               $name.text( $tab.text() );
               $info.show();
           }
       } );
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

	$(document).on("change",'.sort_by',function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getEventsListing();
	});
        $(document).ready(async function() {
            // getEventsListing();
            let events = await getEventsListing();
            let ref = $("#calendar");
            var calendar = ref.calendarGC({
                        dayBegin: 0,
                        prevIcon: '',
                        nextIcon: '',
                        events: events,
                        onclickDate: function (e, data) {
                            console.log(e, data);
                        }
            });
        });
        async function getAjaxEvents(){

       let events = []
       await ajaxGet("{{route('user.events.listing')}}",{},"",'json', async (response) =>{
                   let data = await response.data
                   for(let i=0 ; i<data.length;i++){
                       console.log(data);
                       events.push({
                           date: new Date(data[i].event_date),
                           eventName: data[i].title,
                           className: "badge",
                           onclick(e, data) {
                               console.log(data);
                           },
                           dateColor: "red"
                       });
                   }

           });
       return events;

   }
   async function getEventsListing (){
       filters.view_type = 'box';
       await ajaxGet("{{route('user.events.listing')}}",filters,".events-box",responseType='html');
       filters.view_type = 'table';
       await ajaxGet("{{route('user.events.listing')}}",filters,".events",responseType='html');
       let events = await getAjaxEvents();
       console.log('here',events)
       return events;
   }
        $(document).on('keyup', '.search-box', function() {
            search = $(this).val();
            if (search.length > 2) {
                ajaxGet("{{ route('event-calenders.search') }}", {
                    search
                }, ".events", responseType = 'html');
            }
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

        $(document).on('change', '#end-date', function(ev) {
            filters.start_date = $('#start-date').val();
            filters.end_date = $('#end-date').val();
            let activeTab = $('ul.resp-tabs-list').find('li.resp-tab-active').attr('id');
            filters.view_type = activeTab;
            div = ".events-box"
            if(activeTab == "table"){
                div = ".events"
            }
            ajaxGet("{{ route('user.event-calenders.search') }}", filters, div, responseType = 'html');
        });

        // function getEventsListing() {
        //     ajaxGet("{{ route('user.events.listing') }}",
        //         filters
        //     , ".events", responseType = 'html');
        // }
    </script>

@endsection
