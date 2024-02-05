
window.io = require('socket.io-client');


window.socket = window.io('http://localhost:3000');
window.socket.on('new-message_'+blade_config.user_id, (message) => {
	appendMessage(message)
});


window.socket.on('user_typing',function(user) {
	console.log(user)
});


function appendMessage(message){
	let html = `<div class="tyn-reply" id="tynReply"><div class="tyn-reply-item incoming">
				<div class="tyn-reply-avatar">
				<div class="tyn-media tyn-size-md tyn-circle">
					<img src="${message.image_url}" alt="">
				</div>
				</div>
				<div class="tyn-reply-group">
				
				<!-- .tyn-reply-bubble -->
				<div class="tyn-reply-bubble">
					<div class="tyn-reply-text"> ${message.message} </div>
				
					<!-- .tyn-reply-tools -->
				</div>
				<!-- .tyn-reply-bubble -->
				</div>
				<!-- .tyn-reply-group -->
			</div></div>`;
		
	$('.chat-msg').append(html);
}