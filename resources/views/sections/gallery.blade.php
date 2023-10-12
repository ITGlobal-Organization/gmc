<div class="picman_tm_section" id="portfolio">
      <div class="container">
        <div class="capital-gallery">
          <h4>{{ $title }} <span>Gallery</span></h4>
        </div>
      </div>
      <div class="picman_tm_porfolio_wrap">
        <div class="picman_tm_portfolio_titles" style="left: 565px; top: 404px">
          {{ __('lang.commercial_area')}}<span class="work__cat"></span>
        </div>
        <div class="picman_tm_portfolio" data-width="400" data-gap="24" style="animation-name: marketifyScroll0">
          @foreach($Galleries as $key => $gallery)
          <div class="{{ $gallery['class'] }}" style="min-width: 400px">
            <div class="image" data-title="" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="{{ asset($gallery['images'][0]['image']) }}" data-fancybox="gallery"></a>
                <img src="{{ asset($gallery['images'][0]['thumbnail']) }}" alt="" />
                <div class="main" data-img-url="{{ asset($gallery['images'][0]['image']) }}" style="background-image: url('{{ asset($gallery['images'][0]['image']) }}');"></div>
              </div>
            </div>
            <div class="image" data-title="" data-category="" style="padding: 12px">
              <div class="img_in">
                <a href="{{ asset($gallery['images'][1]['image']) }}" data-fancybox="gallery"></a>
                <img src="{{ asset($gallery['images'][1]['thumbnail']) }}" alt="" />
                <div class="main" data-img-url="{{ asset($gallery['images'][1]['image']) }}" style="background-image: url('{{ asset($gallery['images'][1]['image']) }}');"></div>
              </div>
            </div>
          </div>
          @endforeach
      
          
        </div>
      </div>
    </div>