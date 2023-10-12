@php
  $Property = new \App\Models\Property();
  
  $Properties = $Property->getAll([],['id','name']);
  $Projects = config('projects.projects')
@endphp
<div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
            <form class="contact-form" method="POSTS">
               <div class="form-bg-hd">
                  <h4>{!! $heading !!}</h4>
                  <div class="contact-success"></div>
                  <div class="contact-error"></div>
                  <div class="form-group">
                    <input type="text" placeholder="{{ __('lang.full_name') }}" class="form-control first_name">
                    <div class="error-first_name errors"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" placeholder="{{ __('lang.email') }}" class="form-control email">
                    <div class="error-email errors"></div>
                  </div>
                  <div class="form-group">
                    <input type="number" placeholder="{{ __('lang.phone') }}" class="form-control phone">
                    <div class="error-phone errors"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="{{ __('lang.city') }}" class="form-control city">
                    <div class="error-city errors"></div>
                  </div>
                  <div class="form-group">
                    <select class="form-control project">
                      @foreach($Projects as $Project)
                      <option value="{{ $Project['name'] }}">{{ $Project['name'] }}</option>
                      @endforeach
                    </select>
                    <div class="error-property errors"></div>
                  </div>
                  <div class="form-group">
                  <textarea cols="6" rows="6" placeholder="{{ __('lang.message') }}" class="form-control message"></textarea>
                    <div class="error-message errors"></div>
                  </div>
                
                  <button type="submit" class="btn btn-primary">{{ __('lang.submit')}}</button>
               </div>
            </form>
</div>