
 <!-- FOOTER SECTION BEGIN -->
 <footer>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
               <div class="footer-logo">
                  <a href="javascript:void(0)"><img src="/images/logo.png" alt="image" class="img-fluid"></a>
                  <p>We are a ceramic coating company dedicated to protecting and enhancing the appearance of your vehicle. Our high-quality coatings provide long-lasting shine and protection against damage from the elements</p>
                  <a href="javascript:void(0)" class="footer-logo-link">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="quick-links">
                  <h4>{{ trans('lang.quick_links') }}</h4>
                  @php 
                     $FooterMenus = config('site_config.menus.footer-menu1');
                  @endphp
                  <ul>
                     @foreach($FooterMenus as $menu)
                     @if($menu['link'] != 'home')
                     <li><a href="{{ route('site-pages',$menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a></li>
                     @else
                        <li><a href="{{ route($menu['link']) }}">{{ trans('lang.'.$menu['name'])}}</a></li>
                     @endif
                     @endforeach
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
               <div class="quick-links">
                  <h4>{{ trans('lang.services') }}</h4>
                  @php 
                     $Services = trans('content.services.services');
                  @endphp
                  <ul>
                     @foreach($Services as $Service)
                     <li><a href="{{ route($Service['link'],$Service['slug']) }}">{{ $Service['heading'] }}</a></li>
                     @endforeach
                     <!-- <li><a href="javascript:void(0)">Interior Packages</a></li>
                     <li><a href="javascript:void(0)">Exterior Packages</a></li>
                     <li><a href="javascript:void(0)">Ceramic Coatings</a></li> -->
                  </ul>
               </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-12">
               <div class="quick-links">
                  <h4>{{ trans('lang.contact') }}</h4>
                  <ul>
                     <li><a href="tel:{{ config('site_config.contacts.phone') }}">Phone:<span>{{ config('site_config.contacts.phone') }}</span></a></li>
                     <li><a href="mailto:{{ config('site_config.contacts.email') }}">Email:<span>{{ config('site_config.contacts.email') }}</span></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="copyright-text">
               <p class="copy-right-para">{{ config('site_config.contacts.copyright')}}<strong></p>
               </div>
            </div>
         </div>
         <div class="left-footer-design">
            <img src="{{ asset(config('site_config.assets.images').'footer-des.png') }}" alt="image" class="img-fluid">
         </div>
         <div class="right-footer-design">
            <img src="{{ asset(config('site_config.assets.images').'footer-des.png') }}" alt="image" class="img-fluid">
         </div>
      </div>
   </footer>
   <!-- FOOTER SECTION END -->
