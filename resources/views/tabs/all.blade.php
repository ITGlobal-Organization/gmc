<div class="all-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($Events))
                @foreach ($Events as $Event)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="{{$Event->booking_link}}" target="_blank"><img src="{{$Event->image_url}}" alt="not found" width="100%"
                                         class="box-img" /></a>
                            </div>
                            <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                {{ \Carbon\Carbon::parse($Event->event_date)->format('d-m-Y')}}</div>
                            <div class="box-name">
                                <a href="{{$Event->booking_link}}" target="_blank">
                                    {{$Event->title}}
                                </a>
                            <div class="box-text">
                                {!! $Event->description !!}
                            </div>
                        </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                @endforeach
            @endif
                      @if (isset($News))
                @foreach ($News as $News)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="{{ route('blogs.get',$News->slug) }}"><img src="{{ $News->image_url }}" alt="" width="100%"
                                        class="box-img" /></a>
                            </div>
<div class="box-name home home-text">
    <div style="display: flex; justify-content: center; align-items: center;">
        <a href="{{route('blogs.get',$News->slug)}}">
            {{$News->title}}
        </a>
    </div>
</div>
                            <div class="box-text">
                                {!! $News->description!!}
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