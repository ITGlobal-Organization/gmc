
        <option value="event_date-desc">Upcoming First</option>
        <option value="event_date-asc">Distant First</option>
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
</div>
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
@include('sections.pagination.paginationv1')

  <!--  -->
  <!--  -->

<!--End Table listing-->
