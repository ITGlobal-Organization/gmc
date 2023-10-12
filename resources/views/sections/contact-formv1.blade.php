<form method="POSTS" class="wow fadeInLeft contact-form" data-wow-duration="0.9s" data-wow-delay="0.9s">
<div class="contact-success"></div>
       <div class="contact-error"></div>
   <div class="main-touch-flex">
      <div class="main-touch-inner">
         <label>{{ __('lang.full_name') }}</label>
         <input type="text" placeholder="{{ __('lang.full_name') }}" class="form-control first_name">
         <div class="error-first_name errors"></div>
      </div>
      <div class="main-touch-inner">
         <label>{{ __('lang.city') }}</label>
         <input type="text" placeholder="{{ __('lang.city') }}" class="form-control city">
         <div class="error-city errors"></div>
      </div>
   </div>
   <div class="main-touch-flex">
      <div class="main-touch-inner">
         <label>{{ __('lang.email') }}</label>
         <input type="email" placeholder="{{ __('lang.email') }}" class="form-control email">
         <div class="error-email errors"></div>
      </div>
      <div class="main-touch-inner">
         <label>{{ __('lang.phone') }}</label>
         <input type="number" placeholder="{{ __('lang.phone') }}" class="form-control phone">
         <div class="error-phone errors"></div>
      </div>
   </div>
   <div class="main-touch-flex">
      <div class="main-touch-inner">
         <label>{{ __('lang.message') }}</label>
         <textarea cols="6" rows="7" placeholder="{{ __('lang.message') }}" class="form-control message"></textarea>
         <div class="error-message errors"></div>
      </div>
   </div>
   <div class="submit-req-btn">
      <button type="submit" class="btn btn-primary">{{ __('lang.submit_request') }}</button>
   </div>
</form>