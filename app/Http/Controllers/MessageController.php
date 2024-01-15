<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Message;

class MessageController extends BaseController
{
    //

    private $message,$media;
    public function __construct(Message $message) {
        $this->message = $message;

        $this->setModel($this->message);
        // $this->setMedia($media);
    }


    public function index(Request $request){

        return view('pages.chat',[
            'title' => 'Chat'
        ]);
    }
}
