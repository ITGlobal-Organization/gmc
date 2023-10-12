@php 
  $Reviews = config('site_config.reviews');
@endphp
<div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
            <div class="clients-testimonials-heading">
              <h4>{!! $Reviews['heading'] !!}</h4>
            </div>
            <div class="clients-testimonials-slider">
              <div class="slider responsive3">
                <div>
                  @php 
                      $count = 1;
                  @endphp
                  @foreach($Reviews['sections'] as $review)
                  <div class="inner-slider-box {{ $count%2 == 0?'inner-slider-new':'' }}">
                    <img src="{{ asset(config('site_config.assets.images').$review['image']) }}" alt="image" class="img-fluid">
                    <div class="slider-img-content">
                      <p>{{ $review['review'] }}</p>
                      <span>{{ $review['name']}}</span>
                    </div>
                  </div>
                  @if($count%2 == 0)
                    </div><div>
                  @endif

                  @php 
                      $count += 1;
                  @endphp
                  @endforeach
                  <!-- <div class="inner-slider-box inner-slider-new">
                    <img src="images/slider-img.png" alt="image" class="img-fluid">
                    <div class="slider-img-content">
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
                      <span>Robert Adison</span>
                    </div>
                  </div> -->
                </div>
                <!-- <div>
                  <div class="inner-slider-box">
                    <img src="images/slider-img.png" alt="image" class="img-fluid">
                    <div class="slider-img-content">
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
                      <span>Robert Adison</span>
                    </div>
                  </div>
                  <div class="inner-slider-box inner-slider-new">
                    <img src="images/slider-img.png" alt="image" class="img-fluid">
                    <div class="slider-img-content">
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
                      <span>Robert Adison</span>
                    </div>
                  </div>
                </div>                 -->
              </div>
            </div>
          </div>