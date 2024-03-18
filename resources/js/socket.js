
window.io = require('socket.io-client');
import { createToaster } from "@meforma/vue-toaster";

const toaster = createToaster({ /* options */ });
window.toaster = toaster;

window.socket = window.io('https://perthshirecc.co.uk:3000');
window.socket.on('new-message_'+blade_config.user_id, (message) => {
	appendMessage(message)
	increaseUnreadMessages(message.sender_id)
	notify("New Message from: " + message.sender_name,'success',message);
	playSound()
});


window.socket.on('typing',function(message) {
	if(message.user_id != blade_config.user_id)
	{	console.log(message)
		$('.message-typing-'+message.user_id).text('typing...');
		$('.message-typing-'+message.user_id).css('color','#0e6e1e');
		$('.message-typing-'+message.user_id).css('font-weight','bold');
	}
	setTimeout(() => {
		$('.message-typing-'+message.user_id).text('');
	},2000);
});

window.socket.on('new-post',function(message){
	console.log(message);
    toaster.info(message.message+'<a href="' + message.route + '"> Click Here </a>'); 
	
    playSound();
});

function appendMessage(message){
	let html = `<div class="tyn-reply" id="tynReply"><div class="tyn-reply-item incoming">
				<div class="tyn-reply-avatar">
				<div class="tyn-media tyn-size-md tyn-circle">
					<img src="${message.image_url}" alt="">
				</div>
				</div>
				<div class="tyn-reply-group">


				<div class="tyn-reply-bubble">
					<div class="tyn-reply-text"> ${message.message} </div>


				</div>

				</div>

			</div></div>`;

	$('.chat-msg').append(html);
}


function playSound(){
	let notify = $('.message-notification')[0];
	if (notify.paused) {
		notify.play();
	} else {
		notify.pause();
		notify.currentTime = 0; // Reset playback to the beginning
	}
}

function increaseUnreadMessages(user_id){
	let msgCount = $('.message-count'+user_id);
	if(msgCount){
		msgCount.addClass('message-count');
		let count = msgCount.text();
		if(count != ''){
			count = parseInt(count);
			count += 1;
			msgCount.text(count);
		}
	}
}
