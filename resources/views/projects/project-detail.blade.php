@extends('layouts.layoutv1')
@section('content')

<!-- VIDEO BANNER SECTION BEGIN -->
@include('sections.bannerv1',[
    'heading' => $title,
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => false,
        'src' => asset(config('site_config.assets.images').'banner-animation.mp4'),
    ], 
    'link' => [
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
@php 
      $Project = config('projects.'.$name);
      $path = config('site_config.assets.images');
      $Galleries = config('projects.'.$name.'.galleries');
@endphp
    <!-- VIDEO BANNER SECTION END -->
    <!-- CAPITAL CITY SECTION BEGIN -->
    <section class="capital-city-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
            <img src="{{ asset($path.$Project['section1']['image']) }}" alt="image" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="dri-prof wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
              {!! $Project['section1']['heading'] !!}
              <p>{!! $Project['section1']['description'] !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CAPITAL CITY SECTION END -->
    <!-- PROFESSIONALS SECTION BEGIN -->
    <section class="professionals-sec" style="background-image: url('{{ $Project['section2']['image'] }}');">
      <div class="bg-video-wrap">
      <div class="full-screen-banner">
        <div class="dri-prof">
          <h5 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $Project['section2']['heading'] !!}</h5>
          <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">{!! $Project['section2']['description'] !!}</p>
        </div>
      </div>
    </div>
    </section>
    <!-- PROFESSIONALS SECTION END -->
    <!-- REAL ESTATE SECTION BEGIN -->
    <section class="real-estate-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <img src="{{ asset($path.$Project['section3']['image1']) }}" alt="image" class="img-fluid">
              <div class="img-popup-btn">
                <a href="{{ $Project['section3']['image2'] }}" target="_blank"><i class="fa fa-play" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img-content">
              <h5 class="wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">{!! $Project['section3']['heading'] !!}</h5>
              <p class="wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $Project['section3']['description'] !!}</p>
              <div class="img-popup-booknow">
                <a href="javascript:void(0)" class="btn btn-primary wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">{{ __('lang.about_us')}}</a>
                <a href="javascript:void(0)" class="btn btn-primary dark-color wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="1.1s">{{ __('lang.book_now')}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- REAL ESTATE SECTION END -->
    <!-- PROFESSIONALS SECOND SECTION BEGIN -->
    <section class="professionals-second-sec" style="background-image: url('{{ $Project['section4']['image'] }}');">
      <div class="bg-video-wrap" >
      <div class="full-screen-banner">
        <div class="dri-prof">
          <h5 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $Project['section4']['heading'] !!}</h5>
          <p class="wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1.1s">{!! $Project['section4']['description'] !!}</p>
        </div>
      </div>
    </div>
    </section>
    <!-- PROFESSIONALS SECOND SECTION END -->
    <!-- OUR SERVICES SECTION BEGIN -->
    <section class="our-services-sec project-services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
              <img src="{{ asset($path.$Project['section5']['image']) }}" alt="image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img-content">
              <h5 class="wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $Project['section5']['heading'] !!}</h5>
              <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">{!! $Project['section5']['description'] !!}</p>
              <div class="img-popup-booknow">
                <a href="{{ route('site-pages','contact-us') }}" class="btn btn-primary dark-color wow fadeInDown" data-wow-duration="1.1s" data-wow-delay="1.1s">{{ __('lang.book_now')}}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- OUR SERVICES SECTION END -->
    <!-- OUR CLIENTS SECTION BEGIN -->
    <section class="our-clients-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="smart-city-map wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
             <img src="{{ asset($path.$Project['section6']['image1']) }}" alt="image" class="img-fluid">
             <div class="location-address-img">
               <img src="{{ asset($path.$Project['section6']['image2']) }}" alt="image" class="img-fluid">
             </div>
             <div class="marker-img">
               <img src="{{ asset($path.$Project['section6']['image3']) }}" alt="image" class="img-fluid bounce2">
             </div>
           </div>
          </div>
          <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12"> -->
            @include('sections.contact-form',[
            'heading' => __('messages.contact.sec-heading')
            ])

        </div>
      </div>
    </section>
    <!-- OUR CLIENTS SECTION END -->
    <!-- GALLERY SECTION BEGIN -->
    @include('sections.gallery',[
      'Galleries'  => $Galleries,
    ])
    <!-- GALLERY SECTION END -->
@endsection
@section('scripts')
<script src="https://rawgit.com/moagrius/isOnScreen/master/jquery.isonscreen.min.js"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/custom.js') }}"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/plugins.js') }}"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/init.js') }}"></script>
<!-- <script src="js/plugins.js"></script>
    <script src="js/init.js"></script> -->
<!-- <script src="js/custom.js"></script> -->


@endsection