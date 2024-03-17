<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <div class="table-div1 table-responsive">
        <table>
            <tr>
                <th class="side1">Date</th>
                <th>Title</th>
                <th>Time</th>
                <th>Location</th>
                <th>City</th>
                <th>Cost</th>
                <th>Booking Link</th>
                <th>{{ trans('lang.status')}}</th>
                <th>{{ trans('lang.action')}}</th>

            </tr>

            @foreach ($Events as $Event)
                @if (str_contains($Event->price, '-'))
                    @php$price = explode('-', $Event->price);
                                                                $Event->price = '€' . $price[0] . '-€' . $price[1]; @endphp ?> ?> ?>
                @else
                    @php $Event->price = $Event->price; @endphp
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
                    <td class=" list30">
                        <span class="btn-download"><a
                                href="{{ $Event->booking_link }}">Book
                                Here</a></span>
                            </td>
                    <td class="list30"><div class="{{ $Event->is_approved==1?'approved':'notapproved'}}" style="top:0px;">{{ $Event->is_approved==1?trans('lang.approved'):trans('lang.not-approved')}}</div></td>

                    <td class="list30">
                        <div class="row">
                        <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6 text-center edit-btn">

                            <a href="#" style="font-size: 12px;width:100%" class="edit"
                                data-id="{{ $Event->id }}">{{ trans('lang.edit')}}</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center delete-btn">

                            <a href="#" style="font-size: 12px;width:100%" class="delete"
                                data-id="{{ $Event->id }}">{{ trans('lang.delete')}}</a>
                        </div>

                        </div>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>
    <div class="clr"></div>
</div>
