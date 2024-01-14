@extends('layouts.layoutv2')

@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <!--Start Directory Details Area-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                <h1 class="mtb-25">{{ $Directory->title }}</h1>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    @if(isset($Directory->media[0]))
                    <img src="{{ $Directory->media[0]->image_url }}" alt="Logo" class="blog-img"/>
                    @else
                    <img src="{{ custom_asset('image-not-found.png') }}" alt="Logo" class="blog-img"/>
                    @endif
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    <p>
                        {!! $Directory->description !!}
                    </p>

                    <div class="clr"></div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    @foreach($Directory->relatedCategories as $Category)
                    <a href="{{ route('directories.index',[
                            'category' => $Category->slug
                        ]) }}">{{ $Category->name.', '}}</a>
                    <div class="clr"></div>
                    @endforeach
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
                    <h2 class="mtb-25">{{ trans('lang.contact')}}</h2>
                    <!--Start Box 1-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-map-marker-alt"
                            style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Address</b> : {{ $Directory->address }}

                        <div class="clr"></div>
                    </div>
                    <!--End Box 1-->

                    <!--Start Box 2-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <a href="tel://{{ $Directory->phone }}"><i class="fas fa-tty" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Telephone</b> :
                        {{ $Directory->phone }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 2-->

                    <!--Start Box 3-->
                    <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <a href="tel://{{ $Directory->mobile_no }}"><i class="fas fa-mobile-alt style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Mobile</b> :
                        {{ $Directory->mobile_no }}
                        <div class="clr"></div>
                    </div>-->

                    <!--End Box 3-->

                    <!--Start Box 4-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">

                        <a href="mailto://{{ $Directory->email }}"><i class="fas fa-envelope-open-text" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Email</b> :

                        {{ $Directory->email }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 4-->

                    <!--Start Box 5-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <a href="{{ $Directory->web_url }}" target="_blank"><i class="fas fa-globe" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Website </b> :
                        {{ $Directory->web_url }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 5-->



                    <!--Start Box 7-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <i class="fas fa-share-alt" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Social Info </b> :

                        <span class="social-media2"> <a href="{{ $Directory->facebook_url }}"><i class="fab fa-facebook-f"
                                    title="Facebook"></i></a> </span>
                        <span class="social-media2"> <a href="{{ $Directory->instagram_url }}"><i class="fab fa-instagram"
                                    title="Instagram"></i></a> </span>
                        <span class="social-media2"> <a href="{{ $Directory->youtube_url }}"><i class="fab fa-twitter"
                                    title="Twitter"></i></a> </span>
                        <span class="social-media2"> <a href="{{ $Directory->linkedin_url }}"><i class="fab fa-linkedin"
                                    title="Linkedin"></i></a> </span>

                        <div class="clr"></div>
                    </div>
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
