<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Directory;
use App\Models\Category;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;


class DirectoryController extends BaseController
{
    private $directory,$media,$user,$category;
    public function __construct(Directory $directory,Media $media,Category $category) {
        $this->directory = $directory;
        $this->category = $category;
        $this->setModel( $this->directory);
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
        return view('admin.crud.create',[
            'title' => trans('lang.blogs').' | '.trans('lang.create'),
            'name' => 'blog',
        ]);
    }


    public function edit(Request $request){
        $user = auth()->user();
        if(isset($user)){
            $galleryImages = $this->media->orderBy('id','desc')->get();
            $result = $this->directory->first('user_id',$user->id,'=',['relatedCategories']);
            // dd($result);
            $this->category->setLength(100000);
            $categories = $this->category->getAll();
            return view('user.company.edit',[
                'Company'=>$result,
                'Categories' => $categories,
                'galleryImages'=>$galleryImages,
                'title' => trans('lang.company').' | '.trans('lang.edit'),
            ]);
        }
        return view('admin.crud.edit',[
            'title' => trans('lang.blogs').' | '.trans('lang.edit'),
            'name' => 'blog',
        ]);
    }


    public function directories(Request $request){

        $CategoryId = '';
        if($request->has('category') && $request->category != ''){
            $CategoryId = $this->category->getIdFromColumn('slug',$request->category);
        }

        return view('directories.directories',[
            'title' => trans('lang.directories'),
            'count' => 0,
            'CategoryId' => $CategoryId
        ]);
    }
    public function getDirectoryListing(Request $request){
        $this->setGeneralFilters($request);
        $orderBy = $request->order_by;
        $order = $request->order;
        $this->removeGeneralFilters($request);

        $data = $request->all();
        $CategoryId = '';
        foreach ($data as $key => $value) {
            if($key == 'category' && (isset($value) && $value != "")){
                $CategoryId = $value;
                $this->directory->setFilters(['directory_categories.id','=',$value]);

            }
            else if(isset($value) && $value != ""){

                $this->directory->setFilters(["directories.".$key,'like','%'.$value.'%']);
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
            'page' => $this->directory->getStart(),
            'CategoryId' => $CategoryId,
            'orderBy' => isset($orderBy)?$orderBy:"",
            'order' => isset($order)?$order:""
        ]);
    }

    public function getDirectory(Request $request,$slug){
        // dd("sdfd");

        $Directory = $this->directory->first('slug',$slug,'=',['user','relatedCategories:id,name,slug'],[],['directories.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);

        // $this->directory->setLength(10);
        // dd($Directory);
        // $LatestBlogs = $this->directory->getAll([['users','users.id','=','directories.user_id']],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);

        return view('directories.directory-detail',[
            'Directory' => $Directory,
            // 'LatestBlog' => $LatestBlogs,
            'title' => trans('lang.directory').' | '. $Directory->title
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
        // dd($request);
        $user = auth()->user();
        // if($request->hasFile('image') && isset($user) && $user->hasRole('user') ){
        //     $media =  Helper::saveMedia($request->image,"App\Models\Directory",'main',$id);
        // }
        $main_img_id = isset($request->main_img_id) ?  $request->main_img_id : '';
        unset($request['main_img_id']);
        $thumbnail_img_id = isset($request->thumbnail_img_id) ?  $request->thumbnail_img_id : '';
        unset($request['thumbnail_img_id']);
        $CategoryIds = $request->category_ids;
        $request->request->remove('category_ids');
        $response = parent::update($request,$id);
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\Directory",'main',$id);
        }else if($main_img_id != ""){
            $media =  Helper::updateGalleryImage($main_img_id,"App\Models\Directory",'main',$id);
        }
        if($request->hasFile('thumbnail')){
            $media =  Helper::saveMedia($request->thumbnail,"App\Models\Directory",'thumbnail',$id);
        }else if($thumbnail_img_id != ""){

            $media =  Helper::updateGalleryImage($thumbnail_img_id,"App\Models\Directory",'thumbnail',$id);
        }
        $this->directory->id = $id;
        $this->directory->deleteRelTableRecord('category_directory');
        try{
            foreach($CategoryIds as $Category){
                $this->directory->addRelTableRecord($Category,'category_directory','category_id');
            }

        }catch(Exception $e){
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
        }
        if(isset($user) && $user->hasRole('user') ){
            $response = [
                'success' => true,
                'data'=>[
                    'route'=>route('user.dashboard')
                ],
                'message'=>'Updated Successfully'
            ];
            return response()->json($response, 200);
        }

    }

    public function setGeneralFilters(Request $request)
    {

        parent::setGeneralFilters($request);
        if($request->has('not_approved')){
            $this->directory->setFilters(['directories.is_approved','=',0]);
        }
    }

}
