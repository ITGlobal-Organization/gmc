<h1 class="text-center mb-40">Events</h1>
<p class="text-center">
    Organised to educate, inform and network, our comprehensive programme of events allows something for
    everyone within the business community. Held at various times – from breakfast meetings to supper socials –
    there should be something to work around business and personal commitments.
    <br><br>
    Events are intented to bring focus to different areas throughout the whole Shire, where possible we try to
    alternate between central and rural locations.
    <br><br>
    If you would like to discuss hosting an event or have an idea for our future calendar then contact the
    Chamber office.
</p>

<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
    <select class="pd-sort sort_by">
        <option value="">{{ trans('lang.sort_by') }}</option>
        <option value="title-asc">A to Z</option>
        <option value="title-desc">Z to A</option>
        <option value="created_at-asc">{{ trans('lang.latest_to_oldest') }}</option>
        <option value="created_at-desc">{{ trans('lang.oldest_to_latest') }}</option>
    </select>
</div>

<!--Start calendar Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

<!--Start Events Tab Area-->
<div class="events-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($Events))
                @foreach ($Events as $Event)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box" style="height: 380px;">
                            <div class="box-img card-image">
                                <a href="{{$Event->booking_link}}" target="_blank"><img src="{{$Event->image_url}}" alt="not found"
                                        width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                {{ \Carbon\Carbon::parse($Event->event_date)->format('d-m-Y')}}</div>
                            <div class="box-name">
                                <a href="{{$Event->booking_link}}" target="_blank">
                                    {{$Event->title}}
                                </a>
                            </div>
                            <div class="box-text" style="height: 90px;">
                                <b>Date:</b> {{ date('d-M-Y', strtotime($Event->event_date)) }} <b>Time:</b> {{\Carbon\Carbon::createFromFormat('H:i:s',$Event->time)->format('h:i A')}}<br>
                                <b>Venue:</b> {{ $Event->venue }}    
                                <b>Price:</b> {{ $Event->price }}<br>
                                <span class="btn-download"><a href="{{$Event->booking_link}}" target="_blank">Book Now</a>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="clr"></div>
</div>
<!--End Events Tab Area-->
<!--Start calendar Area-->
<!--Start search Area-->


<div id="parentHorizontalTab">
    <ul class="resp-tabs-list hor_1 resp-tabs-list1">
        <li>&nbsp; Table View &nbsp;</li>
        <li>&nbsp; Calendar View &nbsp;</li>
    </ul>
    <div class="resp-tabs-container hor_1">
        <!--Start Table listing-->
        <div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 border padding border">

                        <div class="search-oh search-box1">
                            <input type="image" class="oh-btn" img="" src="media/brn-search.png">
                            <input type="text" placeholder="Search" class="oh-input search-box">
                            <div class="clr"></div>
                        </div>
                        <div class="clr"></div>
                        </div>
                        <!--End search Area-->

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border padding border">

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
                </div>
                <div class="table-div1">
                    <table>

                        <tr>
                            <th class="side1">Date</th>
                            <th>Title</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th class="disply-table">City</th>
                            <th class="disply-table">Cost</th>
                            <th class="side2">Booking Link</th>
                        </tr>

                        @foreach ($Events as $Event)
                            @if(str_contains($Event->price, "-"))
                                @php $price = explode("-",$Event->price);
                                $Event->price = "".$price[0]."".$price[1];
                                @endphp
                            @else
                                @php $Event->price = "".$Event->price; @endphp
                            @endif
                            <tr>
                                <td class="list10">{{ date('d-M-Y', strtotime($Event->event_date)) }}</td>
                                <td class="list20">{{$Event->title}}</td>
                                <td class="list20">{{\Carbon\Carbon::createFromFormat('H:i:s',$Event->time)->format('h:i A')}}</td>
                                <td class="list20">{{ $Event->venue }}</td>

                                <td class="list20">{{ $Event->city }}</td>
                                <td class="list20">${{ $Event->price }}</td>
                                <td class=" list30"><span class="btn-download"><a href="{{$Event->booking_link}}" target="_blank">Book Here</a></span></td>

                            </tr>
                        @endforeach



                    </table>
                </div>
                <div class="clr"></div>
            </div>
        </div>
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
@include('sections.pagination.paginationv1')

  <link rel="stylesheet" href="{{ custom_asset('calendar-gc.css','css') }}">
<script src="{{ custom_asset('calendar-gc.min.js','scripts') }}"></script>
<!-- <link href="{{ custom_asset('easy-responsive-tabs.css','css') }}" rel="stylesheet" type="text/css"> -->

<script>
        // const events = []
        async function getEvents(){
            let events = []
            let ref = $("#calendar");
            await ajaxGet("{{route('event-calenders.ajax')}}",{},"",'json', (response) =>{
                    let data = response.data
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

                    var calendar = ref.calendarGC({
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
                        events: events,
                        onclickDate: function (e, data) {
                            console.log(e, data);
                        }
                    });
                    // data.forEach((event) => {
                        
                    // })
            

                });  
            return events
        }
        // const calendarPromise = new Promise(async (resolve,reject) => {
        //     let events = getEvents();
        //     await resolve(events)
           
        // });
    
       
        getEvents();

    


        





</script>
<script src="{{ custom_asset('easyResponsiveTabs.js','scripts') }}"></script>
<script>
$( '#parentHorizontalTab' ).easyResponsiveTabs( {
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
         	$( '#ChildVerticalTab_1' ).easyResponsiveTabs( {
         		type: 'vertical',
         		width: 'auto',
         		fit: true,
         		tabidentify: 'ver_1', // The tab groups identifier
         		activetab_bg: '#fff', // background color for active tabs in this group
         		inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
         		active_border_color: '#c1c1c1', // border color for active tabs heads in this group
         		active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
         	} );
         
         	//Vertical Tab
         	$( '#parentVerticalTab' ).easyResponsiveTabs( {
         		type: 'vertical', //Types: default, vertical, accordion
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		tabidentify: 'hor_1', // The tab groups identifier
         		activate: function ( event ) { // Callback function if tab is switched
         			var $tab = $( this );
         			var $info = $( '#nested-tabInfo2' );
         			var $name = $( 'span', $info );
         			$name.text( $tab.text() );
         			$info.show();
         		}
    } );
</script>
<!--End Table listing-->
