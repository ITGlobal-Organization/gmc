@php
  $Property = new \App\Models\Property();
  $Property->setLength(config('site_config.constants.display-limit'));
  $Property->setStart(0);
  $Property->setOrderBy('created_at');
  $Property->setOrder('desc');

  $Properties = $Property->getAll(['media'],['id','name','price','category','type','city','slug']);
  
@endphp
<section class="buy-sell-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="buy-sell-box wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h2>{{ isset($heading)?$heading:__('messages.properties.sec-heading') }}</h2>
               <p>{{ isset($subheading)?$heading:__('messages.properties.sec-subheading')}}</p>
               @include('sections.filters.filterv2');
            </div>
         </div>
      </div>
      <div class="row sale-row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="slider-heading-text wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h3>{{ trans('lang.buy') }}, {{ trans('lang.sale') }} & <span>{{ trans('lang.rent') }}</span></h3>
            </div>
            <div class="property-slider">
               <div class="slider responsive">
                @if(count($Properties) >0)
                @foreach($Properties as $property)
                  <div>
                     <div class="box-item-div wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <div class="building-box-hover">
                            @if(count($property->media) > 0 )
                                <a href="{{ route('properties.get',$property->slug) }}"><img src="{{ $property->media[0]->image_url }}" alt="image" class="img-fluid"></a>
                            @else
                            <a href="{{ route('properties.get',$property->slug) }}"><img src="{{ asset(config('site_config.assets.image-not-found')) }}" alt="image" class="img-fluid"></a>
                           @endif
                        </div>
                        <div class="building-img-content">
                           <div class="build-tag">
                           <a href="{{ route('properties.get',$property->slug) }}"><p><span>{{ $property->name }} </span> {{ $property->city }}</p></a>
                              
                           </div>
                           <a href="{{ route('properties.get',$property->slug) }}">
                           <div class="build-tag-price">
                              <p>{{ strtoupper(__('lang.starting_from'))}} <span>{{ $property->price,2}}</span> {{ config('site_config.constants.currency') }}</p>
                           </div>
                           </a>
                        </div>
                        <div class="{{ strtolower($property->category)=='rent'?'buy-tag buy-yellow-tag':'buy-tag' }}">
                           <p>{{ strtoupper($property->category) }}</p>
                        </div>
                     </div>
                  </div>
                @endforeach
                @endif
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


    <!-- BUY & SELL MOBILE SLIDER SECTION BEGIN -->
    <section class="mobile-slider-prop">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="mob-prop-slider">
              <div class="row sale-row2">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="slider-heading-text wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
              <h3>{{ isset($heading)?$heading:__('messages.properties.sec-heading') }}</h3>
            </div>
            <div class="property-slider">
              <div class="slider responsive-mob-prop">
              @if(count($Properties) >0)
                @foreach($Properties as $property)
                <div>
                  <div class="box-item-div wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
                    <div class="building-box-hover">
                        @if(count($property->media) > 0 )
                                <a href="{{ route('properties.get',$property->slug) }}"><img src="{{ $property->media[0]->image_url }}" alt="image" class="img-fluid"></a>
                            @else
                            <a href="{{ route('properties.get',$property->slug) }}"><img src="{{ asset(config('site_config.assets.image-not-found')) }}" alt="image" class="img-fluid"></a>
                           @endif
                    </div>
                    <div class="building-img-content">
                      <div class="build-tag">
                      <a href="{{ route('properties.get',$property->slug) }}"><p><span>{{ $property->name }} </span> {{ $property->city }}</p></a>
                      </div>
                      <div class="build-tag-price">
                      <p>{{ strtoupper(__('lang.starting_from'))}} <span>{{ $property->price,2}}</span> {{ config('site_config.constants.currency') }}</p>
                      </div>
                    </div>
                    <div class="{{ strtolower($property->category)=='rent'?'buy-tag buy-yellow-tag':'buy-tag' }}">
                           <p>{{ strtoupper($property->category) }}</p>
                        </div>
                  </div>
                </div>
                @endforeach
                @endif
                
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BUY & SELL MOBILE SLIDER SECTION END -->