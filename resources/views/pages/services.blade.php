@extends('layouts.layoutv1')

@section('content')
@php $name = explode(' ',$Page->name); @endphp
@include('banners.bannerv4',[
    'heading' => count($name)>1? "<span>".implode(" ",array_slice($name,count($name)-2))."</span>"." ".$name[count($name)-1]:"<span>".$name[0]."</span>",
    'subheading' => $Page->description
  ])

  <!-- PROFESSIONAL WASHING SECTION BEGIN -->
  <section class="professional-washing-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="professional-washing-heading">
               <h2><span>Professional Polishing &</span> Ceramic Coating</h2>
               <p>We specialize in complete vehicle paint long term protection and our services reflect soley that.</p>
               <h6>Our Paint Protection Services Include:</h6>
               <ul>
                  <li><img src="{{ asset(config('site_config.assets.images').'circle-tick.png') }}" alt="image" class="img-fluid"> Ceramic Coating.</li>
                  <li><img src="{{ asset(config('site_config.assets.images').'circle-tick.png') }}" alt="image" class="img-fluid"> Paint Protection Film.</li>
                  <li><img src="{{ asset(config('site_config.assets.images').'circle-tick.png') }}" alt="image" class="img-fluid"> Wheel Polishing & Scratch Removal. </li>
                  <li><img src="{{ asset(config('site_config.assets.images').'circle-tick.png') }}" alt="image" class="img-fluid">Paint Wheel,Glass & Leather Ceramic Coating.  </li>
               </ul>
               <div class="washing-btn">
                  <a href="javascript:void(0)" class="btn btn-primary">{{ trans('lang.check_services') }}</a>
                  <a href="tel:{{ config('site_config.contacts.phone') }}" class="number-tel"><img src="{{ asset(config('site_config.assets.images').'ph.png') }}" alt="image" class="img-fluid"> {{ config('site_config.contacts.phone')}}</a>
               </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <img src="{{ asset(config('site_config.assets.images').'washing-car.png') }}" alt="image" class="img-fluid">
            </div>
         </div>
      </div>
   </section>
   <!-- PROFESSIONAL WASHING SECTION END -->
   <!-- OUR SERVICES PAGE SECTION BEGIN -->
   <section class="our-services-sec our-services-pg-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="our-services-content">
                     <h2>{{ $Page->name }}</h2>
                     {!! $Page->description !!}
                  </div>
            </div>
         </div>
         <div class="row">
         @php 
               $Services = trans('content.services.services');
            @endphp
         @if(count($Services) > 0)
         @foreach($Services as $Service) 
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 col-sm-12">
               <div class="box-content">
                  <img src="{{ asset(config('site_config.assets.images').$Service['image']) }}" alt="image" class="img-fluid">
                  <h4>{{ $Service['heading'] }}</h4>
                  <p>{{ $Service['description'] }}</p>
                  <a href="{{ route($Service['link'],$Service['slug']) }}" class="link-btn">{{ trans('lang.read_more') }}</a>
               </div>
            </div>
            @endforeach
         @endif

         </div>
      </div>
   </section>
   <!-- OUR SERVICES PAGE SECTION END -->
    <!-- WHY CALGARY SECTION BEGIN -->
  @include('sections.why')
   <!-- WHY CALGARY SECTION END -->
    <!-- NEWSLETTER SECTION BEGIN -->
    @include('sections.newsletterv1')
     <!-- WHY CALGARY SECTION END -->
@endsection