<!--Start Platinum Partners Tab Area-->
<div class="platinum-partners-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($PlatinumPartners))
                @foreach ($PlatinumPartners as $PlatinumPartner)

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="javascript::void(0)"><img src="{{ $PlatinumPartner->image_url }}" alt=""
                                        width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                {{ \Carbon\Carbon::parse($PlatinumPartner->created_at)->format('d/M/Y')}}</div>

                            <div class="box-name">
                                <a href="javascript::void(0)">
                                    {{ $PlatinumPartner->title }}
                                </a>
                            </div>
                            <div class="box-text">
                                {!! $PlatinumPartner->description !!}
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
<!--End Platinum Partners Tab Area-->
