<div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center">{{ trans('lang.offers')}}</h1>
        <!-- <p class="mb-40 text-center">
            Here we have harnessed space (indoors and out) from within our membership and partners.
            <br>
            This includes property for long term let or sale and also space for use and hire by the hour, day, week,
            month and so on.
            <br>
            There is a variety of options with different facilities e.g. parking and catering.
            <br>
            Please register to upload space you have to offer or search for your needs if you are looking.
        </p> -->
    </div>
    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b>{{ $count }}</b> {{ trans('lang.listing')}} {{ trans('lang.found')}}</span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="{{ route('user.offers.create') }}">{{ trans('messages.add_new_msg',[
                    'attribute' => trans('lang.offer')
                ])}}</a></div>
            <div class="clr"></div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
            <select class="pd-sort sort_by">
                <option value="">{{ trans('lang.sort_by') }}</option>
                <option value="title-asc">A to Z</option>
                <option value="title-desc">Z to A</option>
                <option value="id-asc">{{ trans('lang.latest_to_oldest') }}</option>
                <option value="id-desc">{{ trans('lang.oldest_to_latest') }}</option>
            </select>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

        <div class="row">
            @foreach ($Offers as $Offer)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="{{ $Offer->is_approved==1?'approved':'notapproved'}}">{{ $Offer->is_approved==1?trans('lang.approved'):trans('lang.not-approved')}}</div>
                    <div class="main-box">
                        <div class="box-img card-image">
                            <a href="#"><img src="{{ $Offer->image_url }}" alt=""
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="#">
                                {{ $Offer->title }}
                            </a>

                        </div>
                        <div class="box-text1">
                            <i class="fad fa-check"
                                style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;
                            {!! $Offer->description !!}
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center edit-btn">
                            <a href="#" style="color: #000;font-size: 16px;" class="edit"
                                data-id="{{ $Offer->id }}">{{ trans('lang.edit')}}</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center delete-btn">
                            <a href="#" style="color: #000;font-size: 16px;" class="delete"
                                data-id="{{ $Offer->id }}">{{ trans('lang.delete')}}</a>
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
</div>
