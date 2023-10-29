<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Blog;
use App\Models\Media;

class BlogController extends BaseController
{
    private $blog,$media,$user;
    public function __construct(Blog $blog,Media $media) {
        $this->blog = $blog;

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

    public function getBlogsListing(Request $request){
        if(isset($request->sort_by) && $request->sort_by != ""){
            $sort = explode('-',$request->sort_by);
            $this->blogs->setOrderBy($sort[0]);
            $this->blogs->setOrderBy($sort[1]);
        }

        $Blogs = $this->blog->getAll([['users','users.id','=','blogs.author']],['blogs.title','blogs.description','blogs.created_at']);

        if($request->ajax()){
            return view('sections.blogs',[
                'Blogs' => $Blogs,
            ]);
        }

        return view('blogs.blogs',[
            'title' => trans('lang.blogs'),
        ]);

        
    }
}
