 <!-- BANNER SECTION BEGIN -->
 <section class="banner-sec">
  <div class="banner-overlay"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="banner-content">
              <h1 class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
                <img src="{{ asset(config('site_config.assets.images').'banner-logo.png') }}" alt="image" class="img-fluid">
              </h1>
              <!-- <h2 class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s"><span>Painting</span> Crew</h2> -->
              <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">{{ trans('lang.intererior-exterior') }}</h4>
              <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">{{ trans('lang.residential-commericals') }}</h4>
              <div class="banner-btn wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="1.2s">
                <a href="{{ route('site-pages','get-a-quote')}}" class="btn btn-primary">{{ trans('lang.get_a_free_quote') }}</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
          </div>
        </div>
      </div>
</section>
<!-- BANNER SECTION END -->