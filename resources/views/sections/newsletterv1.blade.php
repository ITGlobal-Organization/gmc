<!-- SUBSCRIBE NEWSLETTER SECTION BEGIN -->
<section class="subscribe-newsletter-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="subscribe-content">
                     <h2>{!! trans('content.newsletter.heading') !!}</h2>
                     <p>{!! trans('content.newsletter.description') !!}</p>
                  </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <form class="newsletter-form">
                  <div class="subscribe-content-btn">
                        <input type="email" placeholder="{{ trans('messages.placeholder',['attribute' => trans('lang.email')])}}" class="form-control newsletter-email">
                        
                        <div class="angle-flex-btn">
                           <button type="submit" class="angle-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                        
                  </div>
                  <div class="error-email errors "></div>
                  </form>
            </div>
         </div>
         <div class="left-design">
            <img src="{{ asset(config('site_config.assets.images').'subscribe-design.png') }}" alt="image" class="img-fluid">
         </div>
         <div class="right-design">
            <img src="{{ asset(config('site_config.assets.images').'subscribe-design.png') }}" alt="image" class="img-fluid">
         </div>
      </div>
   </section>
   <!-- SUBSCRIBE NEWSLETTER SECTION END -->