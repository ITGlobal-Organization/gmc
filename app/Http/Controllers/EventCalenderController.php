<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\EventCalender;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;
use URL;
use DB;

class EventCalenderController extends BaseController
{
    private $eventCalender,$media,$url;

    public function __construct(EventCalender $eventCalender,Media $media,URL $url) {
        $this->eventCalender = $eventCalender;
        $this->setModel($eventCalender);
        $this->setMedia($media);
        $this->url = $url::current();
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

    public function eventCalenders(Request $request){
        $user = Auth::user();
        if(isset($user) && $user->hasRole('user') && str_contains($this->url,"user")){
            $view= 'user.event.index';
        }else{
            $view= 'eventcalenders.event-calenders';
        }
        return view($view,[
            'title' => trans('lang.eventcalenders'),
            'count' => 0
        ]);
    }
    public function getEventsListing(Request $request){
        // dd($request);
        $user = Auth::user();
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);

        // $search = "tit";
        $AllEvents = $this->eventCalender->getAll([],['event_calenders.*','images.image_url']);
        // DB::enableQueryLog();
        // $a=$this->eventCalender->Where('title', 'like', '%' . $search . '%')->get();

        if(isset($request->search) && $request->search != '') {
            $this->eventCalender->setFilters(['title','like','%'.$request->search.'%']);
        }

        if((isset($request->end_date) && $request->end_date != '')  ){
            if($request->start_date == ""){
                $startDate = date('Y-m-d');
            }else{
                $startDate = date('Y-m-d',strtotime($request->start_date));
            }
            $endDate = date('Y-m-d',strtotime($request->end_date));
            // dd($endDate);
            $this->eventCalender->setFilters(['event_date','>=',$startDate]);
            $this->eventCalender->setFilters(['event_date','<=',$endDate]);
            // dd($endDate);
        }
        $Events = $this->eventCalender->getAll([],['event_calenders.*','images.image_url']);
        if(isset($user) && !$user->hasRole('admin') && str_contains($this->url,"user")){
            $view = "user.event.listing";
            // if($request->view_type == 'table'){
            //     $view='user.event.listing';
            // }else{
            //     $view='user.event.event-details-box';
            // }

        }else{
            if($request->view_type =='table'){
                $view='eventcalenders.events-detail';
            }else{
                $view='eventcalenders.event-details-box';
            }

        }
        if($request->ajax()){
            return $this->sendResponse($Events);
        }
        // dd($view);
        return view($view,[
            'Events' => $Events,
            'AllEvents' => $AllEvents,
            'count' => $this->eventCalender->getCount(),
            'page' => $this->eventCalender->getStart()
        ]);
    }
    public function renderForm(Request $request,$id){
        $Event = $this->eventCalender->first('id',$id,'=',['user'],[],['event_calenders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        // $Event=$this->eventCalender->where('id',$request->id)->first();
        return view('user.event.edit',['Event'=>$Event]);
    }

    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\EventCalender",'main',$id);
        }
        parent::update($request,$id);

        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.events')
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
                'route'=>route('user.events')
            ],
            'message'=>'Deleted Successfully'
        ];
        return response()->json($response, 200);
    }

    // public function searchEventsListing(Request $request){
    //     $user = Auth::user();
    //     try{
    //         if(isset($request->search)){

    //             $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->where(function($query)use($request) {
    //                     $query->where('title','like', '%' . $request->search . '%')
    //                     ->orWhere('venue','like', '%' . $request->search . '%')->orWhere('city','like', '%' . $request->search . '%')->orWhere('price','like', '%' . $request->search . '%');
    //             })->orderBy('id','desc')->get();

    //         }
    //         // dd($request);
    //         if(isset($request->end_date) && isset($request->start_date)){
    //             if($request->start_date == ""){
    //                 $startDate = date('Y-m-d');
    //             }else{
    //                 $startDate = date('Y-m-d',strtotime($request->start_date));
    //             }
    //             $endDate = date('Y-m-d',strtotime($request->end_date));
    //             $Events=$this->eventCalender->whereDate('event_date','>=',$startDate)->whereDate('event_date','<=',$endDate)->orderBy('id','desc')->get();
    //         dd($Events);
    //         }
    //         if(isset($user) && $user->hasRole('user')){
    //             $view = "user.event.listing";
    //         }else{
    //             $view = "eventcalenders.events-detail";
    //         }
    //         return view($view,[
    //             'Events' => $Events,
    //         ]);
    //     } catch (\Exception $e) {
    //         Log::error($e);
    //         $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->get();
    //         return view('eventcalenders.events-detail',[
    //             'Events' => $Events,
    //         ]);
    //     }
    // }

    public function store(Request $request){
        parent::store($request);
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\EventCalender",'main',$this->eventCalender->id);
        }
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.events')
            ],
            'message'=>'Created Successfully'
        ];
        return response()->json($response, 200);
    }


    public function getEvent(Request $request,$view,$slug){

        $Event = $this->eventCalender->first('slug',$slug,'=',['user'],[],['*']);

        // $view = 'errors.404';
        if(isset($view) && $view != ''){
            if($view == 'modal')
                $view = 'eventcalenders.ajax.event-detail-modal';
            else
                $view = '';
        }else{
           abort(404);
        }
        return view($view,[
            'Event' => $Event,
            // 'LatestBlog' => $LatestBlogs,

        ]);
    }       

    public function setGeneralFilters(Request $request)
    {
        $this->eventCalender->setLength($request->has('length') ? $request->length : 10);
        $this->eventCalender->setStart($request->has('start') ? $request->start : 1);
        $this->eventCalender->setOrderBy($request->has('orderBy') ? $request->orderBy : 'created_at');
        $this->eventCalender->setOrder($request->has('order') ? $request->order : 'desc');
        if($request->has('not_approved')){
            $this->eventCalender->setFilters(['is_approved','=',0]);
        }
    }
                


}
