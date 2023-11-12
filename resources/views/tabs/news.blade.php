<!--Start News Tab Area-->
<div class="news-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($News))
                @foreach ($News as $News)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="{{ route('blogs.get',$News->slug) }}"><img src="{{ $News->image_url }}" alt="" width="100%"
                                        class="box-img" /></a>
                            </div>
                            <div class="box-name">
                                <a href="{{route('blogs.get',$News->slug)}}">
                                    {{$News->title}}
                                </a>
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
<!--End News Tab Area-->
