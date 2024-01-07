<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\M2MOffer;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;
use DB;
use URL;

class M2MOfferController extends BaseController
{
    private $offer,$media,$user,$url;

    public function __construct(M2MOffer $offer,Media $media,URL $url) {
        $this->offer = $offer;
        $this->setModel($offer);
        $this->setMedia($media);
        $this->url = $url::current();
    }

    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.m2m-offers'),
             'name'  => trans('lang.m2m-offer'),
        ]);
    }

    public function create(Request $request){
        return view('admin.crud.create',[
            'title' => trans('lang.m2m-offers').' | '.trans('lang.create'),
            'name' =>  trans('lang.m2m-offer'),
        ]);
    }

    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.m2m-offers').' | '.trans('lang.edit'),
            'name' =>  trans('lang.m2m-offer'),
        ]);
    }

    public function Offers(Request $request){
        $user = Auth::user();
        if(isset($user) && $user->hasRole('user') && str_contains($this->url,"user")){
            $view = 'user.offer.index';
        }else{
            $view = 'offers.offer';
        }

        return view($view,[
            'title' => trans('lang.offers'),
        ]);
    }

    public function getOffersListing(Request $request){

        $user = Auth::user();
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);

        $data = $request->all();

        foreach ($data as $key => $value) {
            if($value != ""){
                $this->offer->setFilters([$key,'like','%'.$value.'%']);
            }
        }

        $offers = $this->offer->getAll([],['m2m_offers.*','images.image_url']);
        if(isset($user) && !$user->hasRole('admin') && str_contains($this->url,"user")){
            $view='user.offer.listing';
        }else{
            $view='sections.offers';
        }

        return view($view,[
            'Offers' => $offers,
            'count' => $this->offer->getCount(),
            'page' => $this->offer->getStart()
        ]);
    }

    public function getOffer(Request $request,$id){
        $offer = $this->offer->first('slug',$id,'=',['user'],[],['m2m_offers.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);

        $this->offer->setLength(config('site_config.constants.item_per_page'));
        // dd($offer);
        return view('offers.offer-details',[
            'Offer' => $offer,
            'title' => trans('lang.directory').' | '. $offer->title
        ]);
    }

    // public function searchOffers(Request $request){
    //     $user = Auth::user();
    //     $data = $request->all();
    //     foreach ($data as $key => $value) {
    //         if($value != ""){
    //             $this->offer->setFilters([$key,'like','%'.$value.'%']);
    //         }
    //     }
    //     $this->offer->setOrderBy('id');
    //     $this->offer->setOrder('desc');
    //     $offers = $this->offer->getAll();
    //     if(isset($user) && !$user->hasRole('admin')){
    //         $view='user.offers.listing';
    //     }else{
    //         $view='sections.offers';
    //     }
    //     return view($view,[
    //         'Offers' => $offers,
    //     ]);

    // }

    public function renderForm(Request $request,$id){
        $offers = $this->offer->first('id',$id,'=',['user'],[],['m2m_offers.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        return view('user.offer.edit',['Offers'=>$offers]);
    }

    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\M2MOffer",'main',$id);
        }
        if($request->hasFile('logo')){
            $media =  Helper::saveMedia($request->logo,"App\Models\M2MOffer",'logo',$id);
        }
        parent::update($request,$id);
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.offers')
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
                'route'=>route('user.offers')
            ],
            'message'=>'Deleted Successfully'
        ];
        return response()->json($response, 200);
    }

    public function store(Request $request){

        parent::store($request);
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\M2MOffer",'main',$this->offer->id);
        }
        if($request->hasFile('logo')){
            $media =  Helper::saveMedia($request->logo,"App\Models\M2MOffer",'logo',$this->offer->id);
        }
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.offers')
            ],
            'message'=>'Created Successfully'
        ];
        return response()->json($response, 200);
    }

    public function setGeneralFilters(Request $request)
    {
        parent::setGeneralFilters($request);
        if($request->has('not_approved')){
            $this->offer->setFilters(['is_approved','=',0]);
        }
    }
}
