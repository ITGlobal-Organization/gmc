<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
        <select class="pd-sort sort_by">
            <option value="">{{ trans('lang.sort_by') }}</option>
            <option value="title-asc">A to Z</option>
            <option value="title-desc">Z to A</option>

            <option value="event_date-asc">Upcoming First</option>
            <option value="event_date-desc">Distant First</option>
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
                                <a href="{{$Event->booking_link}}" target="_blank"><img src="{{$Event->image_url}}" alt="Event Image"
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
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                            <i class="fas fa-edit" style="color: #0000ff;"></i>
                            <a href="#" style="color: #000;font-size: 16px;" class="edit"
                                data-id="{{ $Event->id }}">Edit</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                            <i class="fas fa-trash-alt" style="color: #ff0000;"></i>
                            <a href="#" style="color: #000;font-size: 16px;" class="delete"
                                data-id="{{ $Event->id }}">Delete</a>
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
