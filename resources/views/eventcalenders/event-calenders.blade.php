@extends('layouts.layoutv2')

@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            
                <h1 class="text-center mb-40">{{ trans('lang.events')}}</h1>
                <p class="text-center">
                    {!! trans('content.events.description') !!}
                </p>
                
            <div class="clr"></div>
            <div id="container">
               <div id="parentHorizontalTab" class="parentHorizontalTab">
                    <div class="event-tabs-cal-list">
                    <ul class="resp-tabs-list hor_1 resp-tabs-list1">
                        <li>&nbsp; Table View &nbsp;</li>
                        <li>&nbsp; Calendar View &nbsp;</li>
                    </ul>
                    </div>
                  <div class="resp-tabs-container hor_1">
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
    <!--End Middle-->
@endsection
@section('scripts')
<link rel="stylesheet" href="{{ custom_asset('calendar-gc.css','css') }}">	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ custom_asset('calendar-gc.min.js','scripts') }}"></script>
<script src="{{ custom_asset('easyResponsiveTabs.js','scripts') }}"></script>
<script>

	// sort_by = "";
    // search ="";
    let filters = {
        start_date:"",
        end_date:"",
        order_by:"",
        order:"",
        start:1,

    }

	$(document).on("change",'.sort_by',async function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getEventsListing()
	});
    

    // $(function (e) {
           
    //      });
         
       
	$(document).ready(async function(){
		let events = await getEventsListing(); 
        let ref = $("#calendar");
            var calendar = ref.calendarGC({
                        dayBegin: 0,
                        prevIcon: '',
                        nextIcon: '',
                        // onPrevMonth: function (e) {
                        //     console.log("prev");
                        //     console.log(e);
                        // },
                        // onNextMonth: function (e) {
                        //     console.log("next");
                        //     console.log(e);
                        // },
                        events: events,
                        onclickDate: function (e, data) {
                            console.log(e, data);
                        }
            });
	})
    $(document).on('keyup','.search-box',function(){
        filters.search = $(this).val();
        setInterval(() => {
            getEventsListing()
        },2000)
    });
    $(document).on('change', '#end-date',async function (ev) {
        filters.start_date = $('#start-date').val();
        filters.end_date = $('#end-date').val();
        getEventsListing()
    });
	
    async function getAjaxEvents(){
       
        let events = []
        await ajaxGet("{{route('event-calenders.ajax')}}",{},"",'json', async (response) =>{
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
        await ajaxGet("{{route('event-calenders.ajax')}}",filters,".events",responseType='html'); 
        let events = await getAjaxEvents();
        console.log('here',events)
        return events;
    }



        // Pagination
        $(document).on('click','.page',async function(e){
            e.preventDefault();
            $('.page').removeClass("page-active");
            $(this).addClass("page-active");
            filters.start = $(this).text();
           await getEventsListing()
        })

        $(document).on('click','.next',async function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == totalPages){
            filters.start  = 1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-1]').addClass("page-active");
           await getEventsListing()
        }else{
             filters.start = parseInt(filters.start)+1;
            $('.page').removeClass('page-active')

            $('.pagination a[data-page=page-'+filters.start+ ']').addClass("page-active");
           await getEventsListing()

        }
    })

    $(document).on('click','.prev',async function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == 1){
            filters.start  = totalPages;
            $('.page').removeClass('page-active');

            $('.pagination a[data-page=page-'+ totalPages + ']').addClass("page-active");
           await getEventsListing()
        }else{
             filters.start  = parseInt( filters.start )-1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+filters.start+ ']').addClass("page-active");
           await getEventsListing()
        }
    })

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

               
</script>






@endsection
