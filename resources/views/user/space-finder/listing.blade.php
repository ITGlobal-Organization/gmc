<div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center">{{ trans('lang.space_finders')}}</h1>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">


        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b>{{ count($SpaceFinders) }}</b> {{ trans('lang.listings')}} {{ trans('lang.found')}}</span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="{{ route('user.space-finders.create') }}">{{ trans('messages.add_new_msg',[
                    'attribute' => trans('lang.space_finder')
                ])}}</a></div>
            <div class="clr"></div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 padding border mb-25">
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
            @foreach ($SpaceFinders as $SpaceFinder)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="main-box">
                    <div class="{{ $SpaceFinder->is_approved==1?'approved':'notapproved'}}">{{ $SpaceFinder->is_approved==1?trans('lang.approved'):trans('lang.not-approved')}}</div>
                        <div class="box-img card-image">
                            <a href="spacefinder-details.php"><img src="{{ $SpaceFinder->image_url }}" alt="Logo"
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="spacefinder-details.php">
                                {{ $SpaceFinder->title }}
                            </a>

                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center edit-btn">

                            <a href="#"  class="edit"
                                data-id="{{ $SpaceFinder->id }}"><i class="fa fa-edit"></i></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center delete-btn">

                            <a href="#"  class="delete"
                                data-id="{{ $SpaceFinder->id }}"><i class="fa fa-trash"></i></a>
                        </div>

                        <div class="clr"></div>
                    </div>

                    <div class="clr"></div>
                </div>
            @endforeach
        </div>

        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
