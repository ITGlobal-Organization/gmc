<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">
        <div>
            <h1 class="mb-25 text-center">{{ trans('lang.spacefinders') }}</h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">


            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
                <span class="listin-found"><b>{{ count($SpaceFinders) }}</b> {{ trans('lang.listings') }}
                    {{ trans('lang.found') }}</span>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
                <div class="addnew-btn"><a
                        href="{{ route('user.space-finders.create') }}">{{ trans('messages.add_new_msg', [
                            'attribute' => trans('lang.spacefinder'),
                        ]) }}</a>
                </div>
                <div class="clr"></div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
                <select class="pd-sort sort_by">
                    <option value="">{{ trans('lang.sort_by') }}</option>
                    <option value="title-asc">A to Z</option>
                    <option value="title-desc">Z to A</option>
                    <option value="created_at-asc">{{ trans('lang.latest_to_oldest') }}</option>
                    <option value="created_at-desc">{{ trans('lang.oldest_to_latest') }}</option>
                </select>

        <div class="row">
            @foreach ($SpaceFinders as $SpaceFinder)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="main-box">
                    <div class="{{ $SpaceFinder->is_approved==1?'approved':'notapproved'}}">{{ $SpaceFinder->is_approved==1?trans('lang.approved'):trans('lang.not-approved')}}</div>
                        <div class="box-img card-image">
                            <a href="spacefinder-details.php"><img src="{{ $SpaceFinder->image_url }}" alt=""
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="spacefinder-details.php">
                                {{ $SpaceFinder->title }}
                            </a>

                        </div>
                        <div class="box-text1">
                            <i class="fad fa-check"
                                style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;

                            {!! App\Helpers\Helper::shortenTextLength($SpaceFinder->description) !!}
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center edit-btn">

                            <a href="#" style="font-size: 16px;" class="edit"
                                data-id="{{ $SpaceFinder->id }}">{{ trans('lang.edit')}}</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center delete-btn">

                            <a href="#" style="font-size: 16px;" class="delete"
                                data-id="{{ $SpaceFinder->id }}">{{ trans('lang.delete')}}</a>
                        </div>

                        <div class="clr"></div>
                    </div>
                @endforeach
            </div>

            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
</div>
