@extends('layouts.layoutv2')

@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <!--Start Directory Details Area-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">

                <h1 class="mtb-25">{{ $Offer->company_name}}</h1>



                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    @if (isset($Offer->media[0]))
                    <img src="{{isset($Offer->media[0]->image_url) ? $Offer->media[0]->image_url : asset('/media/image-not-found.png')}}" alt="Offer Image"/></a>
                    @else
                        <img src="" alt="Offer Image" class="blog-img" />
                    @endif
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">

                    <p>{!! $Offer->offer_details !!}</p>


                    <div class="clr"></div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">

                    <h2 class="mtb-25">Contact Information</h2>

               

                    <!--Start Box 2-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <a href="tel://{{ $Offer->phone }}"><i class="fas fa-tty fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Telephone</b> :
                        {{ $Offer->phone }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 2-->

                    <!--Start Box 4-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <a href="mailto://{{ $Offer->email }}"><i class="fas fa-envelope-open-text fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Email</b> :
                        {{ $Offer->email }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 4-->

                    <!--Start Box 5-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <a href="{{ $Offer->web_url }}" target="_blank"><i class="fas fa-globe fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Website </b> :
                        {{ $Offer->web_url }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 5-->

                    <!--Start Box 6-->

                    <!--End Box 6-->

                    <!--Start Box 7-->

                    <!--End Box 7-->

                </div>
            </div>
            <!--End Directory Details Area-->

            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
