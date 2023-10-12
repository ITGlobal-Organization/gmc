<!-- OUR BLOGS SECTION BEGIN -->
@php
   $Blogs = trans('content.blogs');
@endphp
<section class="our-blogs-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="our-services-flex">
                  <div class="our-services-content">
                     <h2>{!! $Blogs['heading'] !!}</h2>
                     <p>{!! $Blogs['description'] !!}</p>
                  </div>
                  <div class="our-services-btn">
                     <a href="{{ route($Blogs['link']) }}" class="btn btn-primary">{{ trans('lang.view_all') }}</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($Blogs['blogs'] as $blog)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
               <div class="inner-blogs">
                  <img src="{{ asset(config('site_config.assets.images').$blog['image']) }}" alt="image" class="img-fluid">
                  <h6>{!! $blog['heading'] !!}</h6>
                  <p>{!! $blog['description'] !!}</p>
                  <a href="{{ route($blog['link'],$blog['slug']) }}">{{ trans('lang.read_more')}}<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   <!-- OUR BLOGS SECTION END -->