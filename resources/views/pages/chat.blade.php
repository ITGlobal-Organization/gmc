@extends('layouts.layoutv2')

@section('content')
<div class="tyn-root">
			<div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
				@include('sections.chat.aside')
				<!-- .tyn-aside -->
				<div class="tyn-main tyn-chat-content" id="tynMain">
					@include('sections.chat.chatbox')

					<!-- .End chat-head -->
					<!-- .tyn-chat-body -->
					<div class="chat-messages">

					</div>
	
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
		// window.socket.emit('send-message', {
		// 	message:"New Message",
		// 	user_id:1
		// });
	})

	// get users message
	$(document).ready(function() {
		var user_id = $('#user_id').val();
		ajaxGet("{{ prefix_route('chat.messages') }}", {
			user_id:user_id
		}, ".chat-messages", responseType = 'html',null,true);
	})

	$(document).on('keyup', '.message-search-user',function(){
		let search = $(this).val();
		setTimeout(() => {
			ajaxGet("{{ prefix_route('chat.search') }}", {
				search:search
			}, ".tyn-aside-list", responseType = 'html',null,false);
		},2000)
	})
</script>
@endsection