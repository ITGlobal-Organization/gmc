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
                    <img src="{{ $Directory->media[0]->image_url }}" alt="" width="100%" class="blog-img" />
                    @else
                    <img src="" alt="" width="100%" class="blog-img" />
                    @endif
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    <p>
                        {!! $Directory->description !!}
                    </p>

                    <div class="clr"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
                    <h2 class="mtb-25">Contact Information</h2>
                    <!--Start Box 1-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-map-marker-alt"
                            style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Address</b> :{{ $Directory->address }}
                       
                        <div class="clr"></div>
                    </div>
                    <!--End Box 1-->

                    <!--Start Box 2-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <i class="fas fa-tty" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Telephone</b> :
                        {{ $Directory->phone }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 2-->

                    <!--Start Box 3-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-mobile-alt style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Mobile</b> :
                        {{ $Directory->mobile_no }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 3-->

                    <!--Start Box 4-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <i class="fas fa-envelope-open-text" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Email</b> :
                        {{ $Directory->email }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 4-->

                    <!--Start Box 5-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-globe" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Website </b> :
                        {{ $Directory->web_url }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 5-->

                    <!--Start Box 6-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <i class="fas fa-link" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Venue Hire URL</b> :
                        {{ $Directory->venue_url }}
                        <div class="clr"></div>
                    </div>
                    <!--End Box 6-->

                    <!--Start Box 7-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-share-alt" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Social Info </b> :

                        <span class="social-media2"> <a href="{{ $Directory->facebook_url }}"><i class="fab fa-facebook-f"
                                    title="Facebook"></i></a> </span>
                        <span class="social-media2"> <a href="{{ $Directory->instagram_url }}"><i class="fab fa-instagram"
                                    title="Instagram"></i></a> </span>
                        <span class="social-media2"> <a href="{{ $Directory->youtube_url }}"><i class="fab fa-youtube"
                                    title="Youtube"></i></a> </span>
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
