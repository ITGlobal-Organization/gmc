<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Models\Media;
use App\Models\Topic;
use App\Models\User;
use App\Models\PostReply;

class PostController extends BaseController
{
    //

    private $post,$media,$topic,$reply;
    public function __construct(Post $post,Media $media,Topic $topic,User $user,PostReply $reply) {

        $this->post = $post;
        $this->topic = $topic;
        $this->user = $user;    
        $this->reply = $reply;
        $this->setModel($post);
        $this->setMedia($media);
    }
    public function forum(Request $request){
        $Topics = $this->topic->getAll([],['id','name as text']);
        return view('user.forum.index',[
            'title' => trans('lang.forum'),
            'count' => 0,
            'page' => 1,
            'Topics' => $Topics
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
        $User = $this->user->first('id',auth()->user()->id);
        $request->merge([
            'user_image' => count($User->media) > 0?$User->media[0]->image_url:custom_asset('image-not-found.png')
        ]);


        $status = parent::store($request);
        if($status->getStatusCode() == 200){
           $this->user->forumNotification();
            return $this->sendResponse([
                'route'=>prefix_route('forum.index')
            ],trans('messages.success_msg',['action'=> trans('lang.saved')]));
        }
         return $this->sendError(trans('validation.custom.errors.server-errors'));
        
    }

    public function getPosts(Request $request){
        try{
           
            $this->setGeneralFilters($request);
            $this->removeGeneralFilters($request);

            foreach($request->input() as $key => $value){
                if($key == 'is_trending' && $value != '' && $value != 0 ){
                  
                    $this->post->setOrderBy('replies');
                    $this->post->setOrder('desc');
                    // $this->post->setGroupBy('forum_post.id');
                    // $this->post->setTableName('forum_post');
                }
                else if($value != '' && $value != 0){
                    $this->post->setFilters(['forum_post.' .$key ,'=', $value]);
                }
            }
      
            $Posts = $this->post->getPosts();
            return view('user.forum.listing',[
                'Posts' => $Posts,
                'count' => $this->post->getCount(),
                'page' => $this->post->getStart(),
            ]);
        }catch(Exception $e){
           
            return view('user.forum.listing',[
                'Posts' => [],
                'count' => 0,
                'page' => 0,
            ]);
        }
    }

    public function getPost(Request $request,$slug){
        try{
            $Post = $this->post->getPost($slug);
            $this->post->setLength(10);
            $LatestPosts = $this->post->getPosts();
            return view('user.forum.post',[
                'title' => trans('lang.forum') . ' | ' . trans('lang.post'). '|'. $Post->title,
                'Post' =>  $Post,
                'LastetPosts' =>  $LatestPosts 
            ]); 
        }catch(Exception $e){
            Log::error($e);
            abort(404);
        }
       
    }


    public function addReply(Request $request){
        $request->validate(config('rules.forum_posts.reply'));
        $this->reply->setRules([],true);
        $User = $this->user->first('id',auth()->user()->id);
     
        $request->merge([
            'user_image' => count($User->media) > 0?$User->media[0]->image_url:custom_asset('image-not-found.png')
        ]);
        $request->merge([
            'user_id' => auth()->user()->id
        ]);
            $this->setModel($this->reply);
            $response = parent::store($request);
            if($response->getStatusCode() == 200){
           
            return $this->sendResponse([
                ],trans('messages.success_msg',['action'=> trans('lang.saved')]));
            }
            return $this->sendError(trans('validation.custom.errors.server-errors'));
    }


    public function getReplies(Request $request){
        try{
            $this->setGeneralFilters($request);
            $this->removeGeneralFilters($request);
            $this->reply->setFilters(['forum_post_id','=',$request->post_id]);
            $Replies = $this->reply->getAll([
                ['users','forum_replies.user_id','=','users.id'],
            ],['forum_replies.*','users.first_name as user']); 

            return view('user.forum.comment-listings',[
                'Replies' => $Replies,
                'count' => $this->reply->getCount(),
                'page' => $this->reply->getStart(),
            ]);
        }catch(Exception $e){
            return view('user.forum.comment-listings',[
                'Replies' => [],
                'count' => 0,
                'page' => 0,
            ]);
        }
    }

}
