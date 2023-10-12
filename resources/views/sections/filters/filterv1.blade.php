@php
  $Developer = new \App\Models\Developer();
  $Developer->setLength(config('site_config.constants.display-limit'));
  $Developer->setStart(0);
  $Developer->setOrderBy('created_at');
  $Developer->setOrder('desc');

  $Developers = $Developer->getAll(['media'],['id','name']);

  $PropertyType = new \App\Models\PropertyType();
  $PropertyType->setLength(config('site_config.constants.display-limit'));
  $PropertyType->setStart(0);
  $PropertyType->setOrderBy('created_at');
  $PropertyType->setOrder('desc');

  $PropertyTypes = $PropertyType->getAll(['media'],['id','name']);
  
@endphp

<div class="buy-sell-box buy-sell-pg wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
    <h2>{{ isset($heading)?$heading:__('messages.properties.sec-heading') }}</h2>
    <p>{{ isset($subheading)?$heading:__('messages.properties.sec-subheading')}}</p>
    <form class="filter filter-form">
    <div class="fields-box">
       <div class="new-add-boxes">
          <select class="form-control cities search_city" name="search_city">
            <option value="">{{ __('lang.select') }} {{ __('lang.city') }}</option>
          </select>
          <input type="text" placeholder="{{ __('lang.location') }}" class="form-control search_location" name="search_location" value="{{ $request->search_location?$request->search_location:''}}">
            <select class="form-control search_type" name="search_type">
               <option value="">{{ __('lang.select') }} {{ __('lang.property_type') }}</option>
               @foreach($PropertyTypes as $propertyType)
                  <option value="{{ $propertyType->id }}" {{ $request->search_type==$propertyType->id?'selected':''}}>{{ $propertyType->name }}</option>
               @endforeach
            </select>
       </div>
       <div class="new-add-boxes">
          <div class="dev-flex">
            <select class="form-control" name="search_developer">
               <option value="">{{ __('lang.select') }} {{ __('lang.developer') }}</option>
               @foreach($Developers as $developer)
                  <option value="{{ $developer->id }}">{{ $developer->name }}</option>
               @endforeach
            </select>
             
             <input type="hidden"  class="form-control" id="category" value="{{ $request->category?request()->category:'' }}">
          </div>
          <div class="dev-flex">
             <input type="number" placeholder="{{ __('lang.min_price') }}" class="form-control search_min_price" name="search_min_price">
             <input type="number" placeholder="{{ __('lang.max_price') }}" class="form-control search_max_price" name="search_max_price">
          </div>
          <div class="dev-flex">
             <input type="number" placeholder="{{ __('lang.max_area') }} in SQ.YD" class="form-control search_min_area" name="search_min_area">
             <input type="number" placeholder="{{ __('lang.max_area') }} in SQ.YD" class="form-control search_max_area" name="search_max_area">
          </div>
       </div>
       <div class="form-btn">
          <button type="button" class="btn btn-primary search_filter" data-value="Buy">{{ __('lang.buy')}}</button>
          <button type="button" class="btn btn-primary search_filter" data-value="Rent">{{ __('lang.rent')}}</button>
       </div>
    </div>
</form>
</div>