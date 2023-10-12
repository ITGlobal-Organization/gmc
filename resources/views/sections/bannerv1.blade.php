    <!-- VIDEO BANNER SECTION BEGIN -->
<section class="banner-video-wrp">
   <div class="bg-video-wrap">
    @if(isset($video) && $video['display'])
    
      <video src="{{ $video['src'] }}" loop muted autoplay></video>
    
    @elseif(isset($image) && $image['display'])
      <img src="{{ $image['src'] }}" />
    @endif  
      <div class="overlay"></div>
      <div class="full-screen-banner">
         <h1 class="wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">{{ $heading }}<span>{{ $sub_heading }}</span></h1>
         @if(isset($link) && $link['display'])
          <a href="{{ $link['link'] }}" class="btn btn-primary wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">{{ trans('lang.'.$link['text']) }}</a>
         @endif
      </div>
   </div>
</section>