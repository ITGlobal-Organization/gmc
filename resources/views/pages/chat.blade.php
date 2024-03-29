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
		sendMessage();
		$('#tynChatInput').text('');
	})

	// User typing
	$(document).on('keyup', '#tynChatInput',function(event){

		if(event.key === "Enter" || event.keyCode === 13){
			sendMessage();
			return
		}else{
			let data = new FormData();
            data.append("user_id", '{{ auth()->user()->id }}');
		
			ajaxPost("{{ prefix_route('chat.typing') }}", data, '.contact-success', '.contact-error',false);
		}
		
	});
	// get users message
	$(document).ready(function() {
		var user_id = $('#user_id').val();
		if(user_id)
			getUserMessages(user_id);
		// scrolled down a chatbox
	
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
		$('#user_id').val(user_id);
		$(this).addClass('active');
		getUserMessages(user_id);
	});

	async function getUserMessages(user){
		$('.tyn-chat-content').addClass('main-shown');
		await ajaxGet("{{ prefix_route('chat.messages') }}", {
			user_id:user
		}, ".tyn-chat-content", responseType = 'html',null,true);
		let scrolled = false;
		$('#tynChatBody').scroll(function() {
		// alert('herere')
            // Check if the div is scrolled to the bottom
			
            if (($(this).scrollTop() + $(this).innerHeight() - $(this)[0].scrollHeight) >= -5 && !scrolled) {
				let data = new FormData();
				var user_id = $('#user_id').val();
				data.append("message", $('#tynChatInput').text());
				data.append("sender_id", user_id);
				data.append("reciever_id", '{{ auth()->user()->id }}');
				ajaxPost("{{ prefix_route('chat.readed') }}", data, '.contact-success', '.contact-error',false);
				scrolled = true;
                $('.message-count-'+user_id).text('');
				$('.message-count-'+user_id).removeClass('message-count');
            }
        });
	}

	function sendMessage(){
		var user_id = $('#user_id').val();
		// window.echo.channel('chat').whisper('typing', { user: "{{ auth()->user()->name }}" });
		let data = new FormData();
            data.append("message", $('#tynChatInput').text());
            data.append("sender_id", '{{ auth()->user()->id }}');
			data.append("reciever_id", user_id);
		ajaxPost("{{ prefix_route('chat.send') }}", data, '.contact-success', '.contact-error',false);
		$('.chat-msg').append(appendMessage($('#tynChatInput').text()));
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

	$(document).on('click','.btn.js-toggle-main',function(){
		$(this).addClass('active');
		$('.chat-user').removeClass('active');
		$('.tyn-chat-content').removeClass('main-shown')
	})
	
</script>
@endsection