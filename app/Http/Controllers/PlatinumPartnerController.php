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


    public function platinumPartners(Request $request){
        return view('platinumpartners.platinum-partners',[
            'title' => trans('lang.platinumpartners'),
        ]);
    }
    public function getPlatinumPartnersListing(Request $request){
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);
        $PlatinumPartner = $this->platinumPartner->getAll([],['platinum_partners.title','platinum_partners.slug','platinum_partners.description','platinum_partners.created_at','images.image_url']);
        // dd($PlatinumPartner);
        return view('sections.platinum-partners',[
            'PlatinumPartners' => $PlatinumPartner,
        ]);
    }

    public function getPlatinumPartner(Request $request,$slug){
        $PlatinumPartner = $this->platinumPartner->first('slug',$slug,'=',[],[],['*']);
      

        return view('platinumpartners.platinum-partner',[
            'PlatinumPartner' => $PlatinumPartner,
            // 'LatestBlog' => $LatestBlogs,
            'title' => trans('lang.platinum-partner').' | '. $PlatinumPartner->title
        ]);
    }
}
