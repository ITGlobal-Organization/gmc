<div class="col-xs-12 padding mtb-25">
   <i class="far fa-comments post-author"></i>
   <h5>{{ trans('lang.comments')}} ({{ count($Replies) }})</h5>
</div>
<!--Start Comments list Area-->	
@if(count($Replies) > 0)
@foreach($Replies as $Reply)
<div class="col-xs-12 padding mb-25">
   <img src="{{ $Reply->user_image }}" alt="Commented User" width="100%" class="img-thumbnail img-thumbnail1" />
   <div class="comment-block">
      <div class="comment-arrow"></div>
      <strong>{{ $Reply->user }}</strong>
      <!-- <span class="pt-right">
      <a href="#">Reply</a>						
      </span> -->
      <p class="p-author mtb-15">{!! $Reply->reply !!}.</p>
      <div class="pt-right">{{ Helper::getDate($Reply->created_at,config('site_config.constants.long-date-format')) }}</div>
   </div>
   <div class="clr"></div>
</div>
@endforeach
@endif