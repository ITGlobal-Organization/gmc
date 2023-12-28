@extends('layouts.layoutv2')



@section('content')



<!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">

<div class="middle mtb-60">

<h1 class="text-center mb-40">{{$Offer->company_name}}</h1>



<div class="text-center mtb-25">

<img src="{{isset($Offer->media[0]->image_url) ? $Offer->media[0]->image_url : asset('/media/image-not-found.png')}}" alt=""/></a>

</div>

<p>{!! $Offer->offer_details !!}</p>
</div>

<div class="clr"></div>

</div>

<!--End Middle-->

@endsection





