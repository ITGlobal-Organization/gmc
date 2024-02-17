var express = require('express');
var app = express();
const fs = require('fs')
const Redis = require('ioredis');
const redis = new Redis();
 


// var privateKey = fs.readFileSync('../../../laragon/etc/ssl/laragon.key').toString();
// var certificate = fs.readFileSync('../../../laragon/etc/ssl/laragon.crt').toString();
// var pca = fs.readFileSync('../../../laragon/etc/ssl/cacert.pem').toString();

// var credentials = {
//     key:privateKey,
//     cert:certificate,
//     pca:pca,
//     requestCert: false,
//     rejectUnauthorized: false
// }
const options = {
    key: fs.readFileSync('/etc/letsencrypt/live/perthshirecc.co.uk/privkey.pem'),
    cert: fs.readFileSync('/etc/letsencrypt/live/perthshirecc.co.uk/fullchain.pem'),
  };

  const server = https.createServer(options, (req, res) => {
    // Your application logic here
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Hello, secure world!\n');
  });
// const server = require('http').createServer(app);
const io=require('socket.io')(server,{
    cors: {
        origin: '*',
        methods: ["GET", "POST"],
        allowedHeaders: ["*"],
      }
});


// server.listen(8080);
const port =443;
var users = [];
server.listen(port,function(){
    console.log('listen on port 3000');
})


redis.subscribe('chat',function(){
    console.log('suscribe');
});

io.on('connection', function(socket){
    socket.on('user_connected', function(user_id){
        console.log('connected'+user_id)
        // users[user_id] = socket.id;
        // io.emit('updateUserStatus',users)
        
    })

    socket.on('disconnect',function(){
        var i = users.indexOf(socket.id);
        console.log(socket.id);
       /// users.splice(i,1,8);
        //io.emit('updateUserStatus',users);
    });

    // socket.on('user_typing',function(user){
    //     console.log(user);
    //     io.emit('typing',user)
    // })
})



redis.on('message',function(channel,message){
    console.log(channel);
    if(channel == 'chat'){
        console.log(message)

        
      
        var message = JSON.parse(message)
        var data = message.data;
        if(data.typing){
            io.emit('typing',data);
            return true;
        }
        let reciever_id = data.reciever_id;
        let event = message.event;
        io.emit('new-message_'+reciever_id,data);
        
    }
})