<div class="threads-reply">
   <div class="threads-flex">
      <h6>{{ trans('lang.threads')}}</h6>
   </div>
   <div class="threads-reply-flex">
      <h6>{{ trans('lang.replies')}}</h6>
   </div>
</div>
@if(count($Posts) > 0)
@foreach($Posts as $key => $Post)
<div class="threads-reply threads-reply-new {{ ($key+1) % 2 == 0?'threads-flex-three':'' }}">
   <div class="threads-flex">
      <p><i class="fa fa-laptop" aria-hidden="true"></i> {{ trans('lang.content')}}</p>
      <a href="{{ prefix_route('forum.post',$Post->slug) }}">{!! $Post->title !!}</a>
   </div>
   <div class="threads-reply-flex">
      <h6>{{ $Post->replies == 0?'-':Helper::padtoLeft($Post->replies,2)}}</h6>
   </div>
</div>
<!-- <div class="threads-reply threads-reply-new threads-flex-three">
   <div class="threads-flex">
      <p><i class="fa fa-laptop" aria-hidden="true"></i> Content</p>
      <a href="javascript:void(0)">How your child can benefit from online learning</a>
   </div>
   <div class="threads-reply-flex">
      <h6>-</h6>
   </div>
</div>
<div class="threads-reply threads-reply-new">
   <div class="threads-flex">
      <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored threads</p>
      <a href="javascript:void(0)">How do you keep your childern busy? Share your stories of when it worked(...and when it didn't!) with Boden - &#163;200 voucher to be won</a>
   </div>
   <div class="threads-reply-flex">
      <h6>75</h6>
   </div>
</div>
<div class="threads-reply threads-reply-new threads-flex-three">
   <div class="threads-flex">
      <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored Q&As</p>
      <a href="javascript:void(0)">Are you looking to buy your first home with help from family members? Put your questions to the Santander experts. &#163;200 voucher to be won</a>
   </div>
   <div class="threads-reply-flex">
      <h6>41</h6>
   </div>
</div>
<div class="threads-reply threads-reply-new">
   <div class="threads-flex">
      <p><i class="fa fa-laptop" aria-hidden="true"></i> Sponsored threads</p>
      <a href="javascript:void(0)">What does your child study at school that you'd like to learn more about? Share with the IET for your chance to win a &#163;200 voucher</a>
   </div>
   <div class="threads-reply-flex">
      <h6>59</h6>
   </div>
</div>
<div class="threads-reply threads-reply-new threads-flex-three">
   <div class="threads-flex">
      <p>Feminism: Sex & Gender Discussions</p>
      <a href="javascript:void(0)">Work EDI Policy - help!</a>
   </div>
   <div class="threads-reply-flex">
      <h6>63</h6>
   </div>
</div> -->
@endforeach
@endif
@include('sections.pagination.paginationv1')