<h1 class="mb-80 text-center">Platinum Partners</h1>
<div class="row">
    @if(isset($PlatinumPartners))
    @foreach ($PlatinumPartners as $PlatinumPartner)
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

        <div class="main-box">

            <div class="brand-img">
                <a href="#"><img src="{{ $PlatinumPartner->image_url }}" alt="" width="150" /></a>
            </div>
            <div class="brand-name">
                <a href="#">
                    {{$PlatinumPartner->title}}
                </a>
            </div>
            <div class="brand-text">
                {!!$PlatinumPartner->description!!}
            </div>

        </div>

        <div class="clr"></div>
    </div>
    @endforeach
    @endif
</div>
