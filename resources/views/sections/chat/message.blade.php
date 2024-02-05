<div class="tyn-reply" id="tynReply">
<div class="tyn-reply-separator">{{ $Msg->message_date }}</div>
      @if($Msg->sender_id == auth()->user()->id)
      <div class="tyn-reply-item outgoing">
         <div class="tyn-reply-group">
            <div class="tyn-reply-bubble">
               <div class="tyn-reply-text"> {{ $Msg->message }}</div>
               <!-- tyn-reply-text -->
               <!-- .tyn-reply-tools -->
            </div>
            <!-- .tyn-reply-bubble -->
         </div>
         <!-- .tyn-reply-group -->
      </div>
      <!-- .tyn-reply-item -->
      @else
      <div class="tyn-reply-item incoming">
         <div class="tyn-reply-avatar">
            <div class="tyn-media tyn-size-md tyn-circle">
               <img src="{{ $Msg->image_url}}" alt="">
            </div>
         </div>
         <div class="tyn-reply-group">
           
            <!-- .tyn-reply-bubble -->
            <div class="tyn-reply-bubble">
               <div class="tyn-reply-text"> {{ $Msg->message}} </div>
            
               <!-- .tyn-reply-tools -->
            </div>
            <!-- .tyn-reply-bubble -->
         </div>
         <!-- .tyn-reply-group -->
      </div>
      @endif
</div>