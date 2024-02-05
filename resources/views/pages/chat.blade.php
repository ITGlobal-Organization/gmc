@extends('layouts.chat')

@section('content')
<div class="tyn-root">
			<div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
				@include('sections.chat.aside')
				<!-- .tyn-aside -->
				<div class="tyn-main tyn-chat-content" id="tynMain">
					

					<!-- .End chat-head -->
					<!-- .tyn-chat-body -->
					<!-- <div class="chat-messages">

					</div> -->
	
				</div>
				<!-- .tyn-chat-content -->
			</div>
</div>
@endsection
@section('scripts')
<script>
	$(document).on('click','#tynChatSend',function(){
		var user_id = $('#user_id').val();
		// window.echo.channel('chat').whisper('typing', { user: "{{ auth()->user()->name }}" });
		let data = new FormData();
            data.append("message", $('#tynChatInput').text());
            data.append("sender_id", '{{ auth()->user()->id }}');
			data.append("reciever_id", user_id);
		ajaxPost("{{ prefix_route('chat.send') }}", data, '.contact-success', '.contact-error',false);
		$('.chat-msg').append(appendMessage($('#tynChatInput').text()));
	})

	// User typing
	$(document).on('keyup', '#user_id',function(){
		window.io.emit('user_typing',{
			user_id:'{{ auth()->user()->id }}'
		});
	});
	// get users message
	$(document).ready(function() {
		var user_id = $('#user_id').val();
		if(user_id)
			getUserMessages(user_id);
	})

	$(document).on('keyup', '.message-search-user',function(){
		let search = $(this).val();
		if(search.length > 1){
			setTimeout(() => {
				ajaxGet("{{ prefix_route('chat.search') }}", {
					search:search
				}, ".tyn-aside-list", responseType = 'html',null,false);
			},1000)
		}
		
	})

	// get users chat
	$(document).on('click', '.chat-user',function(e){
		let user_id = $(this).attr('data-id');
		getUserMessages(user_id);
	});

	function getUserMessages(user){
		ajaxGet("{{ prefix_route('chat.messages') }}", {
			user_id:user
		}, ".tyn-chat-content", responseType = 'html',null,true);
	}

	function appendMessage(message){
		let html = '<div class="tyn-reply" id="tynReply"><div class="tyn-reply-item outgoing">'+
         '<div class="tyn-reply-group">'+
            '<div class="tyn-reply-bubble">'+
               '<div class="tyn-reply-text">'+ message+'</div>'+
             
            '</div>'+
           
			'</div>'+
        
			'</div></div>';
		return html;
	}

	
</script>
@endsection