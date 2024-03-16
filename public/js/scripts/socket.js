import Echo from 'laravel-echo';
import io from 'socket.io-client';

const echo = new Echo({
    broadcaster: 'socket.io',
    host: blade_config.baseUrl+':6001',
});

echo.channel('chat')
    .listen('ChatMessageSent', (event) => {
        console.log('New message:', event);
        // Update your UI with the new message
    });