<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Directory;
use App\Models\Media;


class DirectoryController extends BaseController
{
    private $directory,$media,$user;
    public function __construct(Directory $directory,Media $media) {
        $this->directory = $directory;

        $this->setModel( $this->directory);
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


    public function directories(Request $request){
        return view('directories.directories',[
            'title' => trans('lang.directories'),
            'count' => 0
        ]);
    }
    public function getDirectoryListing(Request $request){
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);

        $data = $request->all();
        foreach ($data as $key => $value) {
            if($key == 'category' && (isset($value) && $value != "")){
                $this->directory->setFilters(['category_id','=',$value]);
            }
            else if(isset($value) && $value != ""){
                $this->directory->setFilters([$key,'like','%'.$value.'%']);
            }
        }
        // $this->directory->setOrderBy('id');
        // $this->directory->setOrder('desc');
        // $Directories = $this->directory->getAll();
        // return view('sections.directories',[
        //     'Directories' => $Directories,
        // ]);
      
        $Directories = $this->directory->getAll([['users','users.id','=','directories.user_id']],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);
      
        return view('sections.directories',[
            'Directories' => $Directories,
            'count' => $this->directory->getCount(),
            'page' => $this->directory->getStart()
        ]);
    }

    public function getDirectory(Request $request,$slug){
        $Blog = $this->directory->first('slug',$slug,'=',['user'],[],['directories.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        // $this->directory->setLength(10);

        // $LatestBlogs = $this->directory->getAll([['users','users.id','=','directories.user_id']],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);

        return view('directories.directory-detail',[
            'Directory' => $Blog,
            // 'LatestBlog' => $LatestBlogs,
            'title' => trans('lang.directory').' | '. $Blog->title
        ]);
    }
    
    public function searchDirectories(Request $request){
       

    }
}
