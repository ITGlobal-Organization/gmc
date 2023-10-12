<!-- TOP BAR SECTION BEGIN -->
<section class="top-bar-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <div class="social-icons-links">
                  @include('sections.social-icons')
               </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            @php 
                $Contacts = config('site_config.contacts');
            @endphp
               <div class="address-box">
                  <ul>
                     <li><a href="tel:{{ $Contacts['phone'][0] }}"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{ $Contacts['phone'][0] }}</a></li>
                     <li><a href="mailto:{{ $Contacts['email'][0] }}"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $Contacts['email'][0] }}</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- TOP BAR SECTION END -->