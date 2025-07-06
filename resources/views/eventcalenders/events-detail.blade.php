<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
    <div class="row search-con">
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding border ">
            
                <select class="category oh-select search-box">
                    <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.category')]) }}</option>
                @foreach($Categories as $Category)
                    <option value="{{ $Category->id }}">{{ $Category->text }}</option>
                @endforeach
                </select>
            
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4 border padding border ">
            <div class="search-oh search-box1">
                <input type="image" class="oh-btn" img="" src="{{ custom_asset('brn-search.png') }}">
                <input type="text" placeholder="Search" class="oh-input search-box">
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>

        <!--End search Area-->
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 border padding border">
            <div class="search-ohch">
                        <input class="ohch-input" name="date" id="start-date" placeholder="Date for visit DD-MM-YYYY"
                            required="required" type="date">
                        <div class="clr"></div>
            </div>
            <span class="ab-to">{{ trans('lang.to')}}</span>
            <div class="search-ohch">
                <input class="ohch-input" name="date" id="end-date" placeholder="Date for visit DD-MM-YYYY"
                            required="required" type="date">
                <div class="clr"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 border padding border">
            <div class="addnew-btn clear-filters"><a href="#">{{ trans('lang.clear-filter')}}</a></div>
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
                    <td class="list20">{{ $Event->price }}</td>
                    @if($Event->category_id == 2)
                    <td class=" list30"><span class="btn-download"><a href="{{ $Event->booking_link }}"
                                target="_blank">Book Here</a></span></td>
                    @else
                        <td class=" list30"><span class="btn-download" ><a href="{{ route('event.book',$Event->slug) }}" class="btn-vcc" data-id="{{ $Event->price }}">Book Here</a></span></td>
                    @endif

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
