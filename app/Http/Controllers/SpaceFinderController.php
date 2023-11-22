<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\SpaceFinder;
use App\Models\Media;

class SpaceFinderController extends BaseController
{
    private $spaceFinder,$media,$user;
    public function __construct(SpaceFinder $spaceFinder,Media $media) {
        $this->spaceFinder = $spaceFinder;

        $this->setModel($spaceFinder);
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

    public function spaceFinders(Request $request){
        return view('space-finders.space-finders',[
            'title' => trans('lang.spacefinders'),
        ]);
    }

    public function getSpaceFindersListing(Request $request){
        if(isset($request->sort_by) && $request->sort_by != ""){
            $sort = explode('-',$request->sort_by);
            $this->spaceFinder->setOrderBy($sort[0]);
            $this->spaceFinder->setOrder($sort[1]);
        }else{
            $this->spaceFinder->setOrderBy('title');
            $this->spaceFinder->setOrder('asc');
        }
        $SpaceFinders = $this->spaceFinder->getAll([['users','users.id','=','space_finders.user_id']],['space_finders.title','space_finders.description','space_finders.created_at','space_finders.categories','images.image_url','space_finders.slug']);

        return view('sections.space-finders',[
            'SpaceFinders' => $SpaceFinders,
        ]);
    }

    public function getSpaceFinder(Request $request,$slug){
        $spaceFinder = $this->spaceFinder->first('slug',$slug,'=',['user'],[],['space_finders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);

        $this->spaceFinder->setLength(config('site_confing.constants.item_per_page'));
        // $LatestBlogs = $this->directory->getAll([['users','users.id','=','directories.user_id']],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);

        return view('space-finders.space-finder-detail',[
            'SpaceFinder' => $spaceFinder,
            // 'LatestBlog' => $LatestBlogs,
            'title' => trans('lang.directory').' | '. $spaceFinder->title
        ]);
    }
    
    public function searchSpaceFinders(Request $request){
        $data = $request->all();
        foreach ($data as $key => $value) {
            if($value != ""){
                $this->spaceFinder->setFilters([$key,'like','%'.$value.'%']);
            }
        }
        $this->spaceFinder->setOrderBy('id');
        $this->spaceFinder->setOrder('desc');
        $spaceFinder = $this->spaceFinder->getAll();
        return view('sections.space-finders',[
            'SpaceFinders' => $spaceFinder,
        ]);

    }
}
