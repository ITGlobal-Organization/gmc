<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Message;
use App\Models\User;
use App\Events\ChatMessageSent;
use Auth;
class MessageController extends BaseController
{
    //

    private $message,$media,$sender_id;
    public function __construct(Message $message,User $user) {
        $this->message = $message;
        $this->user = $user;
        $this->setModel($this->message);
        // $this->setMedia($media);
    }


    public function index(Request $request){
        $this->sender_id = Auth::user()->id;
        $Users = $this->message->getMessagesUsers($this->sender_id);           
        
       
        return view('pages.chat',[
            'title' => 'Chat',
            'Users' => $Users
        ]);
    }


    public function send(Request $request){
        
        $request->validate($this->message->getRules());
        try{
          
            $data = [
                'message' => $request->message,
                'sender' => auth()->user()->id,
                'reciever' => $request->user_id,
                'sender_name' => auth()->user()->name,
            ];
            // event(new ChatMessageSent($data));
            broadcast(new ChatMessageSent($data));
            return $this->sendResponse($data,'');
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.sending')]));
        }

    }

    public function userMessages(Request $request){
        try{
            // $this->sender_id = Auth::user()->id;
            $Messages = $this->message->getMessages($request->user_id);           
            
            $User = $this->user->first($request->user_id);
            return view('sections.chat.chatbox',[
                'User' => $User,
                'Messages' => $Messages
            ]);
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.sending')]));
        }

    }

    public function searchUser(Request $request){
        try{
            $this->user->setFilters(['email','like', '%'.$request->search.'%']);

            $Users = $this->user->getAll([],['users.*','users.first_name as name','images.image_url']);
            return view('sections.chat.aside',[
                'Users' => $Users,
            
            ]);
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg'));
        }
    }
}
