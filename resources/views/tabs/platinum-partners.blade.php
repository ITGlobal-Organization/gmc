<!--Start Platinum Partners Tab Area-->
<div class="platinum-partners-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            @if (isset($PlatinumPartners))
                @foreach ($PlatinumPartners as $PlatinumPartner)

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="{{ $PlatinumPartner->url }}"><img src="{{ $PlatinumPartner->image_url }}" alt=""
                                        style="max-width: 150px; width: 100%; height: auto; margin: auto; display: block;" /></a>
                            </div>
                            <div class="box-name">
			    <a href="{{ $PlatinumPartner->url }}" style="color: #ffffff; text-decoration: none; font-size: 24px; background-color: #609897; padding: 5px; display: inline-block;">{{ $PlatinumPartner->title }}</a>
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
