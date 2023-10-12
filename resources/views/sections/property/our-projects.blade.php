@php
  $Property = new \App\Models\Property();
  $Property->setLength(config('site_config.constants.display-limit'));
  $Property->setStart(0);
  $Property->setOrderBy('created_at');
  $Property->setOrder('desc');

  $Projects = $Property->getAll(['media'],['id','name','price','category','type','city','developer','slug'],[['developer','like','%Reality One Group%']]);
  
@endphp
<section class="our-project-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="investment-content">
               <h4 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s"><span>Our</span> Projects</h4>
               <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">Our professional and expert team is eager to assist you and will ensure that you receive the best real estate consultancy, personal attention, and care that you deserve.</p>
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
                            @if(count($project->media) > 0 )
                                 <a href="{{ route('properties.get',$project->slug) }}"><img src="{{ $project->media[0]->image_url }}" alt="image" class="img-fluid"></a>
                                @else
                                <a href="{{ route('properties.get',$project->slug) }}"><img src="{{ asset(config('site_config.assets.image-not-found')) }}" alt="image" class="img-fluid"></a>
                            @endif
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                              <a href="{{ route('properties.get',$project->slug) }}"><p>{{ $project->name }} <span>{{ $project->city }}</span></p></a>
                              </div>
                              <a href="{{ route('properties.get',$project->slug) }}">
                              <div class="build-tag-price">
                                 <small>{{ strtoupper(__('lang.starting_from'))}} </small>
                                 <p>{{ App\Helpers\Helper::setPriceFormat($project->price)}} {{ config('site_config.constants.currency') }}</p>
                              </div>
                              </a>
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
   </div>
</section>