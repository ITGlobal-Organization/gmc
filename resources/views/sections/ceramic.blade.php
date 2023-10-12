<!-- CERAMIC SECTION BEGIN -->
<section class="ceramic-sec">
      @php 
         $Ceramics = trans('content.container-sec');
         $count = 1;
      @endphp
      <div class="container-fluid">
         @foreach($Ceramics as $key => $ceramic)
         <div class="row">
            @if($count % 2 > 0)
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="left-full-img">
                  <img src="{{ asset(config('site_config.assets.images').$ceramic['image']) }}" alt="image" class="img-fluid">
               </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">

               <div class="left-full-content">
                  @php
                     $name = explode(' ',$ceramic['heading']);
                     
                  @endphp
                  <h2>{!!count($name)>1?"<span>".$name[0]."</span>" .' '. implode(' ',array_slice($name,1,count($name)-1)):$name[0] !!}</h2>
                  <p>{!! $ceramic['description'] !!}</p>
                  <a href="{{ route($ceramic['link'],$ceramic['slug']) }}" class="link-btn">{{ trans('lang.read_more') }}</a>
               </div>   
            </div>
            @else
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">

               <div class="left-full-content">
                  @php
                     $name = explode(' ',$ceramic['heading']);
                   
                  @endphp
                  <h2>{!!count($name)>1?"<span>".$name[0]."</span>" .' '. implode(' ',array_slice($name,1,count($name)-1)):$name[0] !!}</h2>
                  <p>{!! $ceramic['description'] !!}</p>
                  <a href="{{ route($ceramic['link'],$ceramic['slug']) }}" class="link-btn">{{ trans('lang.read_more') }}</a>
               </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="left-full-img">
                  <img src="{{ asset(config('site_config.assets.images').$ceramic['image']) }}" alt="image" class="img-fluid">
               </div>   
            </div>
            @endif
         </div>
         @php $count+=1; @endphp
         @endforeach

      </div>
   </section>
   <!-- CERAMIC SECTION END -->