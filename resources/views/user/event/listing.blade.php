<div class="middle mtb-60">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border padding">
        @include('sidebars.sidebarv4')
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 border padding">
        <div id="container">
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1 resp-tabs-list1">
                    <li>&nbsp; Table View &nbsp;</li>
                    <li>&nbsp; Calendar View &nbsp;</li>
                </ul>
                <div class="resp-tabs-container hor_1 ">
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
                                                                                        $Event->price = '€' . $price[0] . '-€' . $price[1]; @endphp ?> ?> ?>
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
                                                <a href="#" style="color: #000;font-size: 14px;" class="delete"
                                                    data-id="{{ $Event->id }}">Delete</a>
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
    </div>
</div>
