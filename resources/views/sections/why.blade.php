<!-- WHY CALGARY SECTION BEGIN -->
@php
   $WhySec = trans('content.why-sec');
   
@endphp
<section class="why-calgary-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-sm-6">
               <div class="why-calgary-heading">
                  <h2>{!! $WhySec['heading']  !!}</h2>
                  <p>{!! $WhySec['description']  !!}</p>
               </div>
            </div>
         </div>
         <div class="row sources-row">
            @foreach($WhySec['sections'] as $section)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="calgary-app">
                  <span><img src="{{ asset(config('site_config.assets.images').$section['image']) }}" alt="image" class="img-fluid"></span>
                  <h6>{{ $section['heading'] }}</h6>
                  <p>{{ $section['description'] }}</p>
               </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q2.png" alt="image" class="img-fluid"></span>
                  <h6>TRUSTED</h6>
                  <p>Dedicated to 5-star quality for every customer</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q3.png" alt="image" class="img-fluid"></span>
                  <h6>PROFESSIONAL</h6>
                  <p>Fully uniformed, equipped, and always improving</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="calgary-app">
                  <span><img src="/images/q4.png" alt="image" class="img-fluid"></span>
                  <h6>GREEN</h6>
                  <p>Eco-conscious at every step</p>
               </div>
            </div> -->
         </div>
         <div class="why-calgary-btn">
            <a href="{{ route('site-pages','about-us') }}" class="btn btn-primary">{{ trans('lang.tell_me_more') }}</a>
         </div>
      </div>
   </section>
   <!-- WHY CALGARY SECTION END -->