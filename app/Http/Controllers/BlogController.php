<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Blog;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;
use URL;

class BlogController extends BaseController
{
    private $blog,$media,$user,$url;
    public function __construct(Blog $blog,Media $media,URL $url) {
        $this->blog = $blog;
        $this->url = $url::current();
        $this->setModel($blog);
        $this->setMedia($media);
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.blogs'),
             'name'  => trans('lang.border'),
        ]);
    }

    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.blogs').' | '.trans('lang.create'),
            'name' => 'blog',
        ]);
    }

    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.blogs').' | '.trans('lang.edit'),
            'name' => 'blog',
        ]);
    }

    public function blogs(Request $request){
        $user = Auth::user();
        if(isset($user) && $user->hasRole('user') && str_contains($this->url,"user")){
            $view = 'user.news.index';
        }else{
            $view = 'blogs.blogs';
        }
        return view($view,[
            'title' => trans('lang.blogs'),
        ]);
    }
    public function getBlogsListing(Request $request){

        $user = Auth::user();
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);

        $data = $request->all();

        foreach ($data as $key => $value) {
            if($value != ""){
                $this->blog->setFilters([$key,'like','%'.$value.'%']);
            }
        }
        // DB::connection()->enableQueryLog();
        $Blogs = $this->blog->getAll([],['blogs.*','images.image_url']);
        // dd($Blogs);
        // dd(DB::getQueryLog());
        if(isset($user) && $user->hasRole('user') && str_contains($this->url,"user")){
            $view='user.news.listing';
        }else{
            $view='sections.blogs';
        }
        return view($view,[
            'Blogs' => $Blogs,
            'count' => $this->blog->getCount(),
            'page' => $this->blog->getStart()
        ]);
    }

    public function getBlog(Request $request,$slug){
        $Blog = $this->blog->first('slug',$slug,'=',['user'],[],['blogs.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);

        $this->blog->setLength(1000);
        $LatestBlogs = $this->blog->getAll([['users','users.id','=','blogs.author']],['blogs.title','blogs.description','blogs.created_at','images.image_url','blogs.slug']);

        return view('blogs.blog-detail',[
            'Blog' => $Blog,
            'LatestBlog' => $LatestBlogs,
            'title' => trans('lang.blog').' | '. $Blog->title
        ]);
    }

    public function renderForm(Request $request,$id){
        $blog = $this->blog->first('id',$id,'=',['user'],[],['blogs.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        return view('user.news.edit',['Blog'=>$blog]);
    }

    public function store(Request $request){

        parent::store($request);
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\Blog",'main',$this->blog->id);
        }
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.news')
            ],
            'message'=>'Created Successfully'
        ];
        return response()->json($response, 200);
    }

    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\Blog",'main',$id);
        }
        parent::update($request,$id);
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.news')
            ],
            'message'=>'Updated Successfully'
        ];
        return response()->json($response, 200);
    }

    public function destroy(Request $request,$id){
        parent::destroy($request,$id);
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.news')
            ],
            'message'=>'Deleted Successfully'
        ];
        return response()->json($response, 200);
    }

    public function setGeneralFilters(Request $request)
    {
        $this->blog->setLength($request->has('length') ? $request->length : 10);
        $this->blog->setStart($request->has('start') ? $request->start : 1);
        $this->blog->setOrderBy($request->has('orderBy') ? $request->orderBy : 'created_at');
        $this->blog->setOrder($request->has('order') ? $request->order : 'desc');
        if($request->has('not_approved')){
            $this->blog->setFilters(['is_approved','=',0]);
        }
    }

}
