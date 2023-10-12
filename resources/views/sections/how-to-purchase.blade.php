@php
   $HowToPurchase = config('site_config.how-to-purchase');
@endphp

<section class="our-services-sec purchase-property-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="investment-content">
               <h4 class="wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $HowToPurchase['heading'] !!}</h4>
            </div>
         </div> 
      </div>
      <div class="row services-block-row">
         @foreach($HowToPurchase['sections'] as $section)
         <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="services-content-box wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.8s">
               <img src="{{ asset(config('site_config.assets.images').$section['image']) }}" alt="image" class="img-fluid">
               <h6>{{ $section['heading'] }}</h6>
               <p>{{ $section['description'] }}</p>
            </div>
         </div>

         @endforeach
      </div>
   </div>
</section>