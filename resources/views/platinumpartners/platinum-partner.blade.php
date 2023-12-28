@extends('layouts.layoutv2')



@section('content')



<!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">

<div class="middle mtb-60">

<h1 class="text-center mb-40">{{ $PlatinumPartner->title}}</h1>



<div class="text-center mtb-25">

@if (isset($PlatinumPartner->media[0]))
    <img src="{{ $PlatinumPartner->media[0]->image_url }}" alt="" class="blog-img" />
@else
    <img src="{{ custom_asset('image-not-found.png')}}" alt="" class="blog-img" />
@endif

</div>

<p>

{!! $PlatinumPartner->description !!}
<a href="{{ $PlatinumPartner->web_url }}" target="_blank"/> {{ trans('lang.here')}}</a>

</p>

</div>

<div class="clr"></div>

</div>

<!--End Middle-->

@endsection





