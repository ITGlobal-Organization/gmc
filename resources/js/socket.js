
window.io = require('socket.io-client');


window.socket = window.io('http://localhost:3000');
window.socket.on('new-message_'+blade_config.user_id, (message) => {
			console.log(message);
});