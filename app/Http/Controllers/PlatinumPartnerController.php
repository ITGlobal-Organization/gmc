<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\PlatinumPartner;
use App\Models\Media;

class PlatinumPartnerController extends BaseController
{
    private $platinumPartner,$media,$user;
    public function __construct(PlatinumPartner $platinumPartner,Media $media) {
        $this->platinumPartner = $platinumPartner;

        $this->setModel($platinumPartner);
        $this->setMedia($media);
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.platinumpartner'),
             'name'  => trans('lang.platinumpartner'),
        ]);
    }

    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.platinumpartner').' | '.trans('lang.create'),
            'name' => 'platinumpartner',
        ]);
    }

    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.platinumpartner').' | '.trans('lang.edit'),
            'name' => 'platinumpartner',
        ]);
    }


    public function platinumPartner(Request $request){
        return view('platinumpartners.platinumpartners',[
            'title' => trans('lang.platinumpartners'),
        ]);
    }
    public function getplatinumPartnersListing(Request $request){
        if(isset($request->sort_by) && $request->sort_by != ""){
            $sort = explode('-',$request->sort_by);
            $this->platinumpartner->setOrderBy($sort[0]);
            $this->platinumpartner->setOrder($sort[1]);
        }
        $PlatinumPartner = $this->platinumpartner->getAll(['platinum_partners.title','platinum_partners.description','platinum_partners.created_at','images.image_url']);
        return view('sections.platinumpartners',[
            'Directories' => $PlatinumPartner,
        ]);
    }

    // public function getDirectory(Request $request,$slug){
    //     $Blog = $this->directory->first('slug',$slug,'=',['user'],[],['directories.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
    //     $this->directory->setLength(10);
    //     // $LatestBlogs = $this->directory->getAll([['users','users.id','=','directories.user_id']],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);

    //     return view('directories.directory-detail',[
    //         'Directory' => $Blog,
    //         // 'LatestBlog' => $LatestBlogs,
    //         'title' => trans('lang.directory').' | '. $Blog->title
    //     ]);
    // }
}
