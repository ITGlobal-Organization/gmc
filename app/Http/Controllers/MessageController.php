<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Message;
use App\Models\User;
use App\Events\ChatMessageSent;
use Auth;
use Log;
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
      
        //  dd($Users,$this->sender_id);
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
                'sender_id' => auth()->user()->id,
                'reciever_id' => $request->reciever_id,
                // 'sender_name' => auth()->user()->name,
            ];
            $this->message->store($data);
            // event(new ChatMessageSent($data));
            $data['sender_name'] =  auth()->user()->first_name;
            $image = $this->user->first('id',auth()->user()->id)->media;
                if(count( $image ) > 0){
                    $image = $this->user->first('id',auth()->user()->id)->media[0]->image_url;
                }else{
                    $image = asset('media/image-not-found.png');
                }

                $data['image_url'] =  $image;
            
            broadcast(new ChatMessageSent($data));
            $Reciever = $this->user->first('id',$request->reciever_id);
           echo $Reciever->id;
           die;
           //dd($Reciever);
           try{
            $Reciever->newMessageNotification([
                'sender_name' => $data['sender_name'],
                'url' => prefix_route('chat.index'),
                'message' => $data['message'],
            ]);
           }catch(Exception $e){
                Log::error($e);
           } 
          
            return $this->sendResponse($data,'');
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.sending')]));
        }

    }

    public function userMessages(Request $request){
        try{
            // $this->sender_id = Auth::user()->id;
            $Messages = $this->message->getMessages($request->user_id); 
            
            if(count($Messages) == 0){
                $data = [
                    'message' => trans('messages.first-msg'),
                    'sender_id' => auth()->user()->id,
                    'reciever_id' => $request->user_id,
                    // 'sender_name' => auth()->user()->name,
                ];
                $this->message->store($data);
                // event(new ChatMessageSent($data));
                $data['sender_name'] =  auth()->user()->name;
                $image = $this->user->first('id',auth()->user()->id)->media;
                if(count( $image ) > 0){
                    $image = $this->user->first('id',auth()->user()->id)->media[0]->image_url;
                }else{
                    $image = asset('media/image-not-found.png');
                }

                $data['image_url'] =  $image;
                broadcast(new ChatMessageSent($data));
            }
            
            $User = $this->user->first('id',$request->user_id);
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
            // dd($Users);
            return view('sections.chat.aside',[
                'Users' => $Users,
            
            ]);
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg'));
        }
    }

    // user message typing
    public function userTyping(Request $request){
        broadcast(new ChatMessageSent([
            'typing' => true,
            'user_id' => $request->user_id
        ]));
        return auth()->check() ? $this->sendResponse([],'') : $this->sendError(trans('messages.error_msg'));
    }

    public function updateMsg(Request $request){
        try{
          
            $data = [
                'is_read' =>1
                // 'sender_name' => auth()->user()->name,
            ];
            $status = $this->message->markasReadMessage($data,$request->sender_id,$request->reciever_id);
            // broadcast(new ChatMessageSent($data));
            return $this->sendResponse($data,'');
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.sending')]));
        }
    }

    public function chatList(Request $request){
        $this->sender_id = Auth::user()->id;
        $Users = $this->message->getMessagesUsers($this->sender_id,1,10);           
        
        //  dd($Users,$this->sender_id);
        return view('sections.chat.recent',[
            'Users' => $Users
        ]);
    }
}
