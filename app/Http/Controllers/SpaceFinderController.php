<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\SpaceFinder;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;
use DB;

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
        $user = Auth::user();
        if(isset($user) && $user->hasRole('user')){
            $view = 'user.space-finder.index';
        }else{
            $view = 'space-finders.space-finders';
        }
        return view($view,[
            'title' => trans('lang.spacefinders'),
            'count' => 0
        ]);
    }

    public function getSpaceFindersListing(Request $request){

        $user = auth::user();
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);

        $data = $request->all();
        foreach ($data as $key => $value) {
            if($value != ""){
                $this->spaceFinder->setFilters([$key,'like','%'.$value.'%']);
            }
        }


        $SpaceFinders = $this->spaceFinder->getAll([],['space_finders.title','space_finders.description','space_finders.created_at','space_finders.categories','images.image_url','space_finders.slug']);


        if(isset($user) && !$user->hasRole('admin')){
            $view='user.space-finder.listing';
        }else{
            $view='sections.space-finders';
        }
        return view($view,[
            'SpaceFinders' => $SpaceFinders,
            'count' => $this->spaceFinder->getCount(),
            'page' => $this->spaceFinder->getStart()
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

    // public function searchSpaceFinders(Request $request){

    //     $this->spaceFinder->setOrderBy('id');
    //     $this->spaceFinder->setOrder('desc');
    //     $spaceFinder = $this->spaceFinder->getAll();
    //     if(isset($user) && !$user->hasRole('admin')){
    //         $view='user.space-finder.listing';
    //     }else{
    //         $view='sections.space-finders';
    //     }
    //     return view($view,[
    //         'SpaceFinders' => $spaceFinder,
    //     ]);

    // }

    public function renderForm(Request $request,$id){
        $SpaceFinder = $this->spaceFinder->first('id',$id,'=',['user'],[],['space_finders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);

        return view('user.space-finder.edit',['SpaceFinder'=>$SpaceFinder]);
    }
    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\SpaceFinder",'main',$id);
        }
        parent::update($request,$id);
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.space-finders')
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
                'route'=>route('user.space-finders')
            ],
            'message'=>'Deleted Successfully'
        ];
        return response()->json($response, 200);
    }
    public function store(Request $request){
        parent::store($request);
        if($request->hasFile('image')){
            // dd($request->image);
            $media =  Helper::saveMedia($request->image,"App\Models\SpaceFinder",'main',$this->spaceFinder->id);
        }
        // dd("ergre");
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.space-finders')
            ],
            'message'=>'Created Successfully'
        ];
        return response()->json($response, 200);
    }
}
