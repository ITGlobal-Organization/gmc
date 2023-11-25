<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b>{{ trans('lang.directories') }} &nbsp;({{ $count }})</b> Listings
        Found</span>
</div>

<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border mb-25">
    @include('sections.search.filterv1')
</div>
<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
    <select class="pd-sort sort_by">
        <option value="">{{ trans('lang.sort_by') }}</option>
        <option value="title-asc">A to Z</option>
        <option value="title-desc">Z to A</option>
        <option value="created_at-asc">{{ trans('lang.latest_to_oldest') }}</option>
        <option value="created_at-desc">{{ trans('lang.oldest_to_latest') }}</option>
    </select>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

<div class="row">
    @foreach ($Directories as $directory)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

            <div class="main-box">

                <div class="box-img card-image">
                    <a href="{{ route('directories.get', $directory->slug) }}"><img src="{{ $directory->image_url }}"
                            alt="" width="100%" class="box-img" /></a>
                </div>
                <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                <div class="box-name home home-text">    <div style="display: flex; justify-content: center; align-items: center;">        <a href={{ route('directories.get', $directory->slug) }}>            {{ $directory->title }}        </a>    </div></div>
                <div class="box-text">
            {!! $directory->description !!}
            </div>

            </div>

            <div class="clr"></div>
        </div>
    @endforeach
</div>
@include('sections.pagination.paginationv1')
