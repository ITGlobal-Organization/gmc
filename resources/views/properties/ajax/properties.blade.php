@if(count($Properties) > 0)
      <div class="row sale-row">
        @php 
                $count = 0;
        @endphp
      @foreach($Properties['data'] as $property)
        <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="box-item-div wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">
               <div class="building-box-hover">
                @if(count($property['media']) > 0 )
                <a href="{{ route('properties.get',$property['slug']) }}"><img src="{{ $property['media'][0]->image_url }}" alt="image" class="img-fluid"></a>
                @else
                    <img src="{{ asset(config('site_config.assets.image-not-found')) }}" alt="image" class="img-fluid">
                @endif
               </div>
               <div class="building-img-content">
                  <div class="build-tag">
                    <a href="{{ route('properties.get',$property['slug']) }}"><p><span>{{ $property['name'] }} </span> {{ $property['city'] }}</p></a>
                  </div>
                  <div class="build-tag-price">
                  <a href="{{ route('properties.get',$property['slug']) }}"><p>{{ strtoupper(__('lang.starting_from'))}} <span>{{ $property['price']}}</span> {{ config('site_config.constants.currency') }}</p></a>
                  </div>
               </div>
               <div class="{{ strtolower($property['category'])=='rent'?'buy-tag buy-yellow-tag':'buy-tag' }}">
                    <p>{{ strtoupper($property['category']) }}</p>
                </div>
            </div>
            @php 
                $count += 1;
            @endphp
        </div>
         @if($count>0 && $count % 3 == 0)
            </div>
            <div class="row sale-row">
         @endif
        @endforeach
        

      </div>
      @else
      <div class="row sale-row"></div>
      @endif

      <div class="bootstrap-pagination wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <nav aria-label="Page navigation example">
            @php 
              $page = $pageno;
            @endphp
            <ul class="pagination">
            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-value="{{ $page-1 }}">Prev</a></li>
                @for($i=1;$i<=$Properties['pages'];$i++)
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" data-value="{{ $i}}">{{ $i }}</a></li>
                    @if($i>=5)
                      @php break; @php 
                    @endif
                @endfor
                @if($pageno < $Properties['pages'])
                <li class="page-item"><a class="page-link" href="javascript:void(0)" data-value="{{ $page+1 }}">Next</a></li>
                @endif
            </ul>
           
         </nav>
      </div>
<!-- @if(count($Properties) > 0)

@endif -->