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
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="our-project-slider">
               <div class="slider responsive2">
               @if(count($Projects) >0)
                @foreach($Projects as $project)
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.6s">
                           <div class="img-box-img">
                           <a href="{{ route('projects.get',str_replace(' ','-',$project['name']))}}"><img src="{{ asset(config('site_config.assets.images').$project['image2']) }}" alt="image" class="img-fluid"></a>
                           
                           </div>
                          
                        </div>
                     </a>
                  </div>
                @endforeach
                @endif
                  
               </div>
            </div>
         </div>
      </div>
      
</section>