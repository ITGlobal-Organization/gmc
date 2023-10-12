<div class="pd-list">
    <div class="pd-img">
        
            <img src="{{$product->image_url?$product->image_url:custom_asset('image-not-found.png')}}" alt=""/ width="250" title="More Patches" height="200">
            @if(isset($product->image_url))
            <div class="img-fix img-fix1"><img src="{{ custom_asset('add-image.png') }}" alt="" onclick="modalOpen({{$product->id}});"></div>
            @endif
    </div>
    <div class="pd-name">
            {{$product->name}}
    </div>
    <div class="pd-text">
            {!! shortenTextLength($product->description) !!}
    </div>
    <div class="pd-btn">
        <a href="{{ $link }}">{{ trans('lang.select')}}</a>
    </div>
</div>