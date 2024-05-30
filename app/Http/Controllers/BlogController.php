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
        $this->media=$media;
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.blogs'),
             'name'  => trans('lang.border'),
        ]);
    }

    public function create(Request $request){
        if(auth()->user()->hasRole('user')){
            $galleryImages = $this->media->orderBy('id','desc')->get();
            return view('user.news.create',[
                'title' => trans('lang.blogs').' | '.trans('lang.create'),
                'name' => 'news',
                'galleryImages'=>$galleryImages
            ]);
        }
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
        $galleryImages = $this->media->orderBy('id','desc')->get();
        return view('user.news.edit',['Blog'=>$blog,'galleryImages'=>$galleryImages]);
    }

    public function store(Request $request){

        // parent::store($request);
        // if($request->hasFile('image')){
        //     $media =  Helper::saveMedia($request->image,"App\Models\Blog",'main',$this->blog->id);
        // }
        $main_img_id = isset($request->main_img_id) ?  $request->main_img_id : '';
        unset($request['main_img_id']);
        $thumbnail_img_id = isset($request->thumbnail_img_id) ?  $request->thumbnail_img_id : '';
        unset($request['thumbnail_img_id']);
        parent::store($request);

        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\Blog",'main',$this->blog->id);
        }else if($main_img_id != ""){
            $media =  Helper::updateGalleryImage($main_img_id,"App\Models\Blog",'main',$this->blog->id);
        }
        if($request->hasFile('thumbnail')){
            $media =  Helper::saveMedia($request->thumbnail,"App\Models\Blog",'thumbnail',$this->blog->id);
        }else if($thumbnail_img_id != ""){
            $media =  Helper::updateGalleryImage($thumbnail_img_id,"App\Models\Blog",'thumbnail',$this->blog->id);
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
        // if($request->hasFile('image')){
        //     $media =  Helper::saveMedia($request->image,"App\Models\Blog",'main',$id);
        // }
        // parent::update($request,$id);
        $main_img_id = isset($request->main_img_id) ?  $request->main_img_id : '';
        unset($request['main_img_id']);
        $thumbnail_img_id = isset($request->thumbnail_img_id) ?  $request->thumbnail_img_id : '';
        unset($request['thumbnail_img_id']);
        parent::update($request,$id);
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\Blog",'main',$id);
        }else if($main_img_id != ""){
            $media =  Helper::updateGalleryImage($main_img_id,"App\Models\Blog",'main',$id);
        }
        if($request->hasFile('thumbnail')){
            $media =  Helper::saveMedia($request->thumbnail,"App\Models\Blog",'thumbnail',$id);
        }else if($thumbnail_img_id != ""){
            $media =  Helper::updateGalleryImage($thumbnail_img_id,"App\Models\Blog",'thumbnail',$id);
        }
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
        parent::setGeneralFilters($request);
        if($request->has('not_approved')){
            $this->blog->setFilters(['is_approved','=',0]);
        }
    }

}
