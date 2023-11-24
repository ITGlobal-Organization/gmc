@extends('layouts.layoutv2')
@section('content')
    <style>
        .addnew-btn a {
            margin: 0px 0px 15px 0px;
            padding: 15px 25px 15px 25px !important;
            width: auto;
            height: auto;
            font-size: 14px;
            color: #fff;
            border-radius: 10px;
            font-weight: 100;
            text-align: center;
            border: 0px solid #eee;
            background-color: #2b9acb;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            font-family: 'Montserrat-Regular';
            cursor: pointer;
            display: inline-block;
            transition: all 0.4s linear;
        }
    </style>
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">

            <h1 class="text-center mb-40">Events Calendar</h1>
            <p class="text-center mb-60">
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
            <!--Start search Area-->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 border padding border">

                <div class="search-oh search-box1">
                    <input type="image" class="oh-btn" img="" src="{{ asset('images/brn-search.png') }}">
                    <input type="text" placeholder="Search" class="oh-input search-box">
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
            <!--End search Area-->

            <!--Start calendar Area-->
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border padding border">

                <div class="search-ohch">
                    <input class="ohch-input" name="date" id="start-date" placeholder="Date for visit DD-MM-YYYY"
                        required="required" type="date">
                    <div class="clr"></div>
                </div>

                <span class="ab-to">TO</span>

                <div class="search-ohch">
                    <input class="ohch-input" name="date" id="" placeholder="Date for visit DD-MM-YYYY"
                        required="required" type="date">
                    <div class="clr"></div>
                </div>

                <div class="clr"></div>
            </div>
            <!--Start calendar Area-->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding border mb-25"></div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border text-right">
                <div class="addnew-btn"><a href="#">Add New</a></div>
                <div class="clr"></div>
            </div>
            <div id="container">
                <div id="parentHorizontalTab">
                    <ul class="resp-tabs-list hor_1 resp-tabs-list1">
                        <li>&nbsp; Table View &nbsp;</li>
                        <li>&nbsp; Calendar View &nbsp;</li>
                    </ul>
                    <div class="resp-tabs-container hor_1">
                        <!--Start Table View listing-->
                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
                                <div class="table-div1">
                                    <table>

                                        <tr>
                                            <th class="side1">Date</th>
                                            <th>Title</th>
                                            <th>Time</th>
                                            <th>Location</th>
                                            <th>City</th>
                                            <th>Cost</th>
                                            <th>Booking Link</th>
                                            <th>Edit</th>
                                            <th class="side2">Delete</th>
                                        </tr>

                                        @foreach ($Events as $Event)
                                            @if (str_contains($Event->price, '-'))
                                                @php$price = explode('-', $Event->price);
                                                                                                        $Event->price = '€' . $price[0] . '-€' . $price[1];
                                                                                                @endphp ?>
                                            @else
                                                @php $Event->price = "€".$Event->price; @endphp
                                            @endif
                                            <tr>
                                                <td class="list10">{{ date('d-M-Y', strtotime($Event->event_date)) }}</td>
                                                <td class="list20">
                                                    {{ $Event->title }}
                                                </td>
                                                <td class="list20">
                                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $Event->time)->format('h:i A') }}
                                                </td>
                                                <td class="list20">{{ $Event->venue }}</td>
                                                <td class="list20">{{ $Event->city }}</td>
                                                <td class="list20">{{ $Event->price }}</td>
                                                <td class=" list30"><span class="btn-download"><a
                                                            href="{{ $Event->booking_link }}">Book
                                                            Here</a></span></td>
                                                <td class="list20">
                                                    <i class="fas fa-edit" style="color: #0000ff;"></i>
                                                    <a href="#" style="color: #000;font-size: 14px;" class="edit"
                                                        data-id="{{ $Event->id }}">Edit</a>
                                                </td>
                                                <td class="list20">
                                                    <i class="fas fa-trash-alt" style="color: #ff0000;"></i>
                                                    <a href="#" style="color: #000;font-size: 14px;"
                                                        class="delete">Delete</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
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



            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <div class ="events"></div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        $('.edit').on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "{{ route('user.events.edit', '') }}" + "/" + id;
            // ajaxGet("{{ route('user.events.ajax') }}",{id:id},".events",responseType = 'html');
        });
        $(document).on('keyup', '.search-box', function() {
            search = $(this).val();
            if (search.length > 2) {
                ajaxGet("{{ route('event-calenders.search') }}", {
                    search
                }, ".events", responseType = 'html');
            }
        });
        $(document).on('change', '#end-date', function(ev) {
            start_date = $('#start-date').val();
            end_date = $('#end-date').val();
            ajaxGet("{{ route('event-calenders.search') }}", {
                start_date: start_date,
                end_date: end_date
            }, ".events", responseType = 'html');
        });
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
