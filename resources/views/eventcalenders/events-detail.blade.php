<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border padding border">

            <div class="search-oh search-box1">
                <input type="image" class="oh-btn" img="" src="media/brn-search.png">
                <input type="text" placeholder="Search" class="oh-input search-box">
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
        <!--End search Area-->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border padding border">
                <div class="col-3">
                    <div class="addnew-btn clear-filters"><a href="#">Clear Filters</a></div>
                </div>
                <div class="col-3">
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
                </div>
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
                @if (str_contains($Event->price, '-'))
                    @php$price = explode('-', $Event->price);
                        $Event->price = '' . $price[0] . '' . $price[1];
                    @endphp
                @else
                    @php $Event->price = "".$Event->price; @endphp
                @endif
                <tr>
                    <td class="list10">{{ date('d-M-Y', strtotime($Event->event_date)) }}</td>
                    <td class="list20"> {{ shortenTextLength($Event->title) }}</td>
                    <td class="list20">{{ \Carbon\Carbon::createFromFormat('H:i:s', $Event->time)->format('h:i A') }}
                    </td>
                    <td class="list20">{{ $Event->venue }}</td>

                    <td class="list20">{{ $Event->city }}</td>
                    <td class="list20">${{ $Event->price }}</td>
                    <td class=" list30"><span class="btn-download"><a href="{{ $Event->booking_link }}"
                                target="_blank">Book Here</a></span></td>

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
