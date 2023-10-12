@extends('layouts.layoutv1')
@section('content')
    @include('banners.bannerv4',[
    'heading' => "<span>Our</span> Blogs",
    'subheading' => "Check out our blogs to learn more about how and why you should protect your vehicle today!"
    ])
@php
   $Blogs = trans('content.blogs');
   
@endphp
    <!-- OUR BLOGS SECTION BEGIN -->
   <section class="our-blogs-pg-sec">
      <div class="container">
         <div class="row">
            @foreach($Blogs['blogs'] as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
               <div class="inner-blogs">
                  <img src="{{ asset(config('site_config.assets.images').$blog['image']) }}" alt="image" class="img-fluid">
                  <h6>{{ $blog['heading']}}</h6>
                  <p>{{ $blog['description']}}</p>
                  <a href="{{ route($blog['link'],$blog['slug']) }}">{{ trans('lang.read_more')}}<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
               </div>
            </div>
            @endforeach
         </div>
         <div class="blogs-load-more">
            <a href="" class="load-more">{{ trans('lang.load_more')}}</a>
         </div>
      </div>
   </section>
   <!-- OUR BLOGS SECTION END -->
    @include('sections.newsletterv1')

@endsection