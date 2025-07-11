<!--Start News Tab Area-->
<div class="news-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($News))
                @foreach ($News as $News)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="{{ route('blogs.get', $News->slug) }}"><img src="{{ $News->image_url }}"
                                        alt="" width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-name home">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ route('blogs.get', $News->slug) }}"
                                        style="color: #ffffff; text-decoration: none; font-size: 14px; padding: 5px;">
                                        {{ $News->title }}
                                    </a>
                                </div>
                            </div>
                            @php  $Description =$News->description; @endphp 
                            @include('sections.wigets.description')
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
