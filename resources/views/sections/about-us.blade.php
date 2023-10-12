   <!-- ABOUT US SECTION BEGIN -->
   <section class="about-us-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-img">
                  <img src="{{ asset(config('site_config.assets.images').trans('content.about_us.img_primary')) }}" alt="image" class="img-fluid">
                  <div class="aboutus-car">
                     <img src="{{ asset(config('site_config.assets.images').trans('content.about_us.img_secondary')) }}" alt="image" class="img-fluid">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="aboutus-content">
                  <h6>{!! trans('content.about_us.subheading') !!}</h6>
                  <h2>{!! trans('content.about_us.heading') !!}</h2>
                  <p>{!! trans('content.about_us.description') !!}</p>
                  <div class="aboutus-btn">
                     <a href="{{ route('site-pages','about-us')}}" class="btn btn-primary">{{ trans('lang.learn_more') }}</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ABOUT US SECTION END -->
