<!--Start Benefits Tab Area-->
<div class="offers-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($Offers))
                @foreach ($Offers as $Offer)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="{{ $Offer->web_url != '' ?  $Offer->web_url : 'javascript::void(0)'}}"><img src="{{ $Offer->image_url }}"
                                        alt="" width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-name home">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="{{ $Offer->web_url != '' ?  $Offer->web_url : 'javascript::void(0)' }}"
                                        style="color: #ffffff; text-decoration: none; font-size: 14px; padding: 5px;">
                                        {{ $Offer->company_name }}
                                    </a>
                                </div>
                            </div>
                            <div class="box-text">
                                {!! $Offer->offer_details !!}
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
<!--End Benefits Tab Area-->
