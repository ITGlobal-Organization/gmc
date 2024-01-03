<!--Start Platinum Partners Tab Area-->
<div class="platinum-partners-tab">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
            <div class="row">
              
                @if (isset($PlatinumPartners))
                    @foreach ($PlatinumPartners as $PlatinumPartner)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="main-box">
                                <div class="box-img card-image">
                                    <a href="{{ route('platinum-partners.get',$PlatinumPartner->slug) }}"><img src="{{ $PlatinumPartner->image_url }}"
                                            alt="" width="100%" class="box-img" /></a>
                                </div>
                                <div class="box-name home">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <a href="{{ route('platinum-partners.get',$PlatinumPartner->slug) }}"
                                            style="color: #ffffff; text-decoration: none; font-size: 14px; padding: 5px;">
                                            {{ $PlatinumPartner->title }}
                                        </a>
                                    </div>
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
