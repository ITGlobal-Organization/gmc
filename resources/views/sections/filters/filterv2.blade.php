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

<form method="GET" action="{{ route('properties.index') }}" class="filter-form">
                  
                  <div class="fields-box">
                    <select class="form-control cities search_city" name="search_city">
                        <option value="">{{ __('lang.select') }} {{ __('lang.city') }}</option>
                    </select>
                     <input type="text" placeholder="{{ __('lang.location') }}" name="search_location" class="form-control search_location">
                     <select class="form-control search_type" name="search_type">
                        <option value="">{{ __('lang.select') }} {{ __('lang.property_type') }}</option>
                        @foreach($PropertyTypes as $propertyType)
                           <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                        @endforeach
                     </select>
                     <input type="hidden" id="category" name="category" value=""/>
                     <div class="form-btn">
                        <button type="button" class="btn btn-primary search_filter" data-value="Buy">{{ trans('lang.buy') }}</button>
                        <button type="button" class="btn btn-primary search_filter" data-value="Rent">{{ trans('lang.rent') }}</button>
                     </div>
                  </div>
               </form>