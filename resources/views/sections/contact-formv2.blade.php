<form class="contact-form" method="POSTS">
    
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
        <input type="hidden" name="property" class="property" value="{{ $Property->id }}"/>
       <div class="form-group">
       <textarea cols="6" rows="6" placeholder="{{ __('lang.message') }}" class="form-control message"></textarea>
         <div class="error-message errors"></div>
       </div>
       <div class="submit-req-btn property-btn">
            <button type="submit" class="btn btn-primary">{{ __('lang.submit')}}</button>
        </div>
       
    
</form>