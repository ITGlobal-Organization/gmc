<div>
   <h5>{{ trans('lang.leave-a-reply')}}</h5>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comment-form">
   <p class="mb-25">
     {{ trans('messages.reply-msg')}}
   </p>
   <form action="#" class="store">
        <label for="comment">{{ trans('lang.comment')}} <span class="required">*</span></label>	
        <textarea id="comment" name="reply" cols="45" rows="2" maxlength="65525" required="" class="textarea"></textarea>
        <div class="error-reply"></div>
            <input type="hidden" name="forum_post_id" value="{{ $Post->id }}" />
        <input name="submit" type="submit" id="submit" class="post-sub" value="{{ trans('lang.post')}} {{ trans('lang.comment')}}">
    </form>	
</div>