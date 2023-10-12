<!-- OUR SERVICES SECTION BEGIN -->
<section class="our-services-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="our-services-flex">
                  <div class="our-services-content">
                     <h2>{!! trans('content.services.heading') !!}</h2>
                     <p>{!! trans('content.services.description') !!}</p>
                  </div>
                  <div class="our-services-btn">
                     <a href="{{ route('site-pages','services') }}" class="btn btn-primary">{{ trans('lang.view_all') }}</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            @php 
               $Services = trans('content.services.services');
            @endphp
            @if(count($Services) > 0)
            @foreach($Services as $Service) 
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
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
   <!-- OUR SERVICES SECTION END -->