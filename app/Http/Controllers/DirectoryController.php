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
                $this->directory->setFilters(['directory_categories.id','=',$value]);
            }
            else if(isset($value) && $value != ""){
                $this->directory->setFilters([$key,'like','%'.$value.'%']);
            }
        }
      
        $Directories = $this->directory->getAll([
            ['users','users.id','=','directories.user_id'],
            ['category_directory','directories.id','=','category_directory.directory_id'],
            ['directory_categories','category_directory.category_id','=','directory_categories.id'],
        ],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);
      
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
    
    public function store(Request $request){
        $CategoryIds = $request->category_ids;
        $request->request->remove('category_ids');
        $response = parent::store($request);
       
        try{
            foreach($CategoryIds as $Category){
                $this->directory->addRelTableRecord($Category,'category_directory','category_id');
            }
          
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
        }
    }

    public function get(Request $request,$id){
        $result = $this->directory->first('id',$id,'=',[]);

        // get adding borders,addons and backings
        $this->directory->id = $id;
        $result['category_ids'] = $this->directory->getRelTableRecord('category_directory','category_id');
        return $this->sendResponse($result);
    }

    public function update(Request $request,$id){
        $CategoryIds = $request->category_ids;
        $request->request->remove('category_ids');
        $response = parent::update($request,$id);
        $this->directory->id = $id;
        $this->directory->deleteRelTableRecord('category_directory');
        try{
            foreach($CategoryIds as $Category){
                $this->directory->addRelTableRecord($Category,'category_directory','category_id');
            }
          
        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
        }
    }
}
