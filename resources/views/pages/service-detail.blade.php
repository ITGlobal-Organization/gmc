@extends('layouts.layoutv1')
@section('content')

@php

      $Service =  trans('content.services.'.$service);
      
   @endphp
  
@include('banners.bannerv4',[
    'heading' => $Service['heading'],
    'subheading' => $Service['description']
  ])
  
<!-- SERVICES CERAMIC SECTION BEGIN -->
   
   <section class="services-ceramic-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-img">
                  <img src="{{ asset(config('site_config.assets.images').$Service['sections'][0]['image']) }}" alt="image" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-content">
                  <h2>{!! $Service['sections'][0]['heading'] !!}</h2>
                  <p>{!! $Service['sections'][0]['description'] !!}</p>
               </div>
               <div class="car-dt-cont">
                  @if(count($Service['sections'][0]['service-include']) > 0)
                  <h6>{{ trans('lang.service_includes') }}</h6>
                  @endif
                  <br/>
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <ul>
                           @foreach($Service['sections'][0]['service-include'] as $key => $Include)
                           <li><img src="{{ asset(config('site_config.assets.images').'circle-tick.png') }}" alt="image" class="img-fluid"> {{ $Include }}</li>

                           @if(($key+1) %4 ==0)
                              </ul>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                 <ul>
                           @endif
                           @endforeach
                      
                        </ul>
                     </div>
                     <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <ul>
                           <li><img src="/images/circle-tick.png" alt="image" class="img-fluid"> Steam Cleaning</li>
                           <li><img src="/images/circle-tick.png" alt="image" class="img-fluid"> Wax & Polish</li>
                           <li><img src="/images/circle-tick.png" alt="image" class="img-fluid"> Cut & Polish</li>
                           <li><img src="/images/circle-tick.png" alt="image" class="img-fluid"> Leather Treatment</li>
                        </ul>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="row aboutus-car-row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="aboutus-content">
                  <h2>{!! $Service['sections'][1]['heading'] !!} </h2>
                  <p>{!! $Service['sections'][1]['description'] !!} </p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <img src="{{ asset(config('site_config.assets.images').$Service['sections'][1]['image']) }}" alt="image" class="img-fluid">
            </div>
         </div>
      </div>
   </section>
   <!-- SERVICES CERAMIC SECTION END -->
   <!-- THINGS SECTION BEGIN -->
   @include('sections.things-sec',[
      'Things' =>   $Service['sections']['things-sec'] 
   ])
   <!-- THINGS SECTION END -->
   <!-- VIDEO PLAYER SECTION BEGIN -->
   <section class="video-player-sec">
      <div class="container">
         <div class="row video-cont">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="aboutus-content">
                  <p>{!! $Service['sections'][2]['description'] !!}</p>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <img src="{{ asset(config('site_config.assets.images').$Service['sections'][2]['image']) }}" alt="image" class="img-fluid">
            </div>
         </div>
         <div class="row fancy-box-video">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="fancy-box-img">
                  <img src="{{ asset(config('site_config.assets.images').$Service['sections']['image']) }}" alt="image" class="img-fluid">
                  <div class="fancy-play-btn">
                     <a href="{{ $Service['sections']['video'] }}" data-fancybox="gallery"><img src="{{ asset(config('site_config.assets.images').$Service['sections']['image']) }}" alt="image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="aboutus-content">
                  <p>{!! $Service['sections']['video-desc'] !!}</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- VIDEO PLAYER SECTION END -->
   <!-- OTHER SERVICES SECTION BEGIN -->
   @include('sections.services')
   <!-- OTHER SERVICES SECTION END -->
   @include('sections.newsletterv1')
@endsection