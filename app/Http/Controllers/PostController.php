<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Models\Media;
use App\Models\Topic;
class PostController extends BaseController
{
    //

    private $post,$media,$topic;
    public function __construct(Post $post,Media $media,Topic $topic) {

        $this->post = $post;
        $this->topic = $topic;
        $this->setModel($post);
        $this->setMedia($media);
    }
    public function forum(Request $request){
        return view('user.forum.index',[
            'title' => trans('lang.forum')
        ]);
    }

    public function create(Request $request){
        $Topics = $this->topic->getAll([],['id','name as text']);
        return view('user.forum.create',[
            'title' => trans('lang.forum') . ' | ' . trans('lang.create'),
            'Topics' =>  $Topics
        ]);
    }

    public function store(Request $request){
        $request->validate($this->post->getRules());
        $status = parent::store($request);
        if($status->getStatusCode() == 200){
           
            return $this->sendResponse([
                'route'=>prefix_route('forum.index')
            ],trans('messages.success_msg',['action'=> trans('lang.saved')]));
        }
         return $this->sendError(trans('validation.custom.errors.server-errors'));
        
    }
}
