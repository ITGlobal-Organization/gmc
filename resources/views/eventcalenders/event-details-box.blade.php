<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
    @include('sections.wigets.selectv1')
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
            <select class="category pd-sort ml-2">
                    <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.category')]) }}</option>
                @foreach($Categories as $Category)
                    <option value="{{ $Category->id }}" {{ $category == $Category->id?'selected':''}}>{{ $Category->text }}</option>
                @endforeach
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
                        <div class="main-box">
                            <div class="box-img card-image">

                                <a href="{{$Event->booking_link}}" target="_blank">
                                @include('components.image',[

                                        'image' => $Event->image_url
                                    ])
                                    </a>
                            </div>
                            <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                {{ \Carbon\Carbon::parse($Event->event_date)->format('d-m-Y')}}</div>
                            <div class="box-name">
                                <a href="{{$Event->booking_link}}" target="_blank">
                                    {{ shortenTextLength($Event->title) }}
                                </a>
                            </div>
                            <div class="box-text" >
                                <b>Date:</b> {{ date('d-M-Y', strtotime($Event->event_date)) }} <b>Time:</b> {{\Carbon\Carbon::createFromFormat('H:i:s',$Event->time)->format('h:i A')}}<br>
                                <b>Venue:</b> {{ $Event->venue }}
                                <b>Price:</b> {{ $Event->price }}<br><br>

                            </div>
                            @if($Event->category_id == 2 && ($Event->limit > $Event->current_bookings))
                            <div class="text-center">
                                <span class="btn-download"><a href="{{$Event->booking_link}}" target="_blank">Book Now</a>
                            </div>
                            @elseif(($Event->limit > $Event->current_bookings) && $Event->category_id == 1)
                            <div class="text-center">
                                <span class="btn-download"><a href="{{ route('event.book',$Event->slug) }}" class="btn-vcc" data-id="{{ $Event->price }}">Book Now</a>
                            </div>
                            @endif

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
@include('sections.pagination.paginationv1')
