 <!-- THINGS SECTION BEGIN -->
 <section class="things-sec">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="car-sec-div">
                  <img src="/images/big-car.png" alt="image" class="img-fluid">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="things-sec-content">
                  <h2>{!! $Things['heading'] !!}</h2>
                  <p>{!! $Things['description'] !!}</p>
               </div>
               <div class="progress-bar-cont">
                  @foreach($Things['features'] as $feature)
                  <h4>{!! $feature['heading'] !!}</h4> 
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100</div>
                  <div class="progress-bar-line-bg1" style="width: {{ $feature['width'];}}">
                  </div>
                </div>
                @endforeach
                <!-- <h4>5 Year Ceramic Coating</h4> 
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100</div>
                </div> -->
                <!-- <h4>Engine lubrication</h4> 
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85</div>
                </div> -->
               </div>
            </div>
         </div>
         <div class="things-square-left">
            <img src="{{ asset(config('site_config.assets.images').'lft.png')  }}" alt="image" class="img-fluid">
         </div>
         <div class="things-square-right">
            <img src="{{ asset(config('site_config.assets.images').'lft.png')  }}" alt="image" class="img-fluid">
         </div>
      </div>
   </section>
   <!-- THINGS SECTION END -->