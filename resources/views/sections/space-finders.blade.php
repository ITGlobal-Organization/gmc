<h1 class="mb-25 text-center">Space Finder</h1>
<p class="mb-40 text-center">
    Here we have harnessed space (indoors and out) from within our membership and partners.
    <br>
    This includes property for long term let or sale and also space for use and hire by the hour, day, week, month and
    so on.
    <br>
    There is a variety of options with different facilities e.g. parking and catering.
    <br>
    Please register to upload space you have to offer or search for your needs if you are looking.
</p>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b>{{ count($SpaceFinders) }}</b> Listings Found</span>
</div>

<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border mb-25">
    @include('sections.search.filterv1')
</div>
<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">

    <select class="pd-sort">
        <option value="hide">Sort by</option>
        <option value="Name">A to Z</option>
        <option value="Name">Z to A</option>
        <option value="Name">Latest Listing</option>
        <option value="Name">Oldest Listing</option>
    </select>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>
<div class="row">
    @foreach ($SpaceFinders as $SpaceFinder)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

            <div class="main-box">

                <div class="box-img card-image">
                    <a href="{{ route('space-finders.get', $SpaceFinder->slug) }}"><img
                            src="{{ $SpaceFinder->image_url }}" alt="" width="100%" class="box-img" /></a>
                </div>
                <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                <div class="box-name home home-text">
    <div style="display: flex; justify-content: center; align-items: center;">
                    <a href="{{ route('space-finders.get', $SpaceFinder->slug) }}" >
                 {!! $SpaceFinder->title !!}</a>
                </div></div>
                <div class="box-text1">
                    <i class="fad fa-check"
                        style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;{{$SpaceFinder->categories}}
                </div>

            </div>

            <div class="clr"></div>
        </div>
    @endforeach
</div>



<div class="clr"></div>
