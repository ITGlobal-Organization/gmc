<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center">{{ trans('lang.employees')}}</h1>

    </div>

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b>{{ $count }}</b> {{ trans('lang.listings')}} {{ trans('lang.found')}}</span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="{{ route('user.employees.create') }}">{{ trans('messages.add_new_msg',[
                    'attribute' => trans('lang.employee')
                ])}}</a></div>
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

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

        <div class="row">
            @foreach ($Employees as $Employee)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="main-box">
                        <div class="box-img card-image">
                            <a href="Employee-details.php"><img src="{{ $Employee->image_url }}" alt=""
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="Employee-details.php">
                                {{ $Employee->title }}
                            </a>

                        </div>
                        <div class="box-text1">
                            <i class="fad fa-check"
                                style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;
                            {!! $Employee->description !!}
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                            <i class="fas fa-edit" style="color: #0000ff;"></i>
                            <a href="#" style="color: #000;font-size: 16px;" class="edit"
                                data-id="{{ $Employee->id }}">Edit</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                            <i class="fas fa-trash-alt" style="color: #ff0000;"></i>
                            <a href="#" style="color: #000;font-size: 16px;" class="delete"
                                data-id="{{ $Employee->id }}">Delete</a>
                        </div>

                        <div class="clr"></div>
                    </div>

                    <div class="clr"></div>
                </div>
            @endforeach
        </div>

        <div class="clr"></div>

    <div class="clr"></div>
</div>
</div>
