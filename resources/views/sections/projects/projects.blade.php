@php 

   $Projects = config('projects.projects');
   

@endphp
<section class="ultimate-investment-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="investment-content">
               <h4 class="wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">{!! $heading !!}
               <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">{{ $subheading }}</p>
            </div>
         </div>
      </div>
      
      <div class="row capital-row">
         @php 
         $count = 1;
         @endphp
         @foreach($Projects as $project)
         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="{{ route('projects.get',str_replace(' ','-',$project['name']))}}">
               <div class="ultimate-boxes-content wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.7s">
                  <div class="image-overlay-ultimate">
                     <img src="{{ asset(config('site_config.assets.images').$project['image1']) }}" alt="image" class="img-fluid">
                     <div class="hover-logo">
                        <img src="{{ asset(config('site_config.assets.images').$project['image2']) }}" alt="image" class="img-fluid">
                     </div>
                  </div>
                  <h6>{{ $project['name'] }}</h6>
               </div>
            </a>
         </div> 
         @if($count % 3 == 0)
            </div>
            <div class="row capital-row">
         @endif
         @php 
            $count += 1;
         @endphp
         @endforeach

   </div>
</section>