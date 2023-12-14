
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 modal-body">
                        <div class="main-box" style="height: 380px;">
                            <div class="box-img-modal card-image">
                          
                                <a href="{{$Event->booking_link}}" target="_blank">
                                @include('components.image',[
										
                                        'image' => count($Event->media) > 0 ?$Event->media[0]->image_url:null
                                    ]) 
                                    </a>
                            </div>
                            <div class="box-date-modal"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                {{ \Carbon\Carbon::parse($Event->event_date)->format('d-m-Y')}}</div>
                            <div class="box-name">
                                <a href="{{$Event->booking_link}}" target="_blank">
                                    {{$Event->title}}
                                </a>
                            </div>
                            <div class="box-text" style="height: 90px;">
                                <b>Date:</b> {{ date('d-M-Y', strtotime($Event->event_date)) }} <b>Time:</b> {{\Carbon\Carbon::createFromFormat('H:i:s',$Event->time)->format('h:i A')}}<br>
                                <b>Venue:</b> {{ $Event->venue }}    
                                <b>Price:</b> {{ $Event->price }}<br/><br/>
                                <span class="btn-download" style="margin-top:20px;"><a href="{{$Event->booking_link}}" target="_blank">{{ trans('lang.book_now')}}</a>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>       

    