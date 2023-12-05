<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\EventCalender;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;

class EventCalenderController extends BaseController
{
    private $eventCalender,$media;

    public function __construct(EventCalender $eventCalender,Media $media) {
        $this->eventCalender = $eventCalender;
        $this->setModel($eventCalender);
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

    public function eventCalenders(Request $request){
        $user = Auth::user();
        if(isset($user) && $user->hasRole('user')){
            $view= 'user.event.index';
        }else{
            $view= 'eventcalenders.event-calenders';
        }
        return view($view,[
            'title' => trans('lang.eventcalenders'),
        ]);
    }
    public function getEventsListing(Request $request){
        $user = Auth::user();
        if(isset($request->sort_by) && $request->sort_by != ""){
            $sort = explode('-',$request->sort_by);
            $this->eventCalender->setOrderBy($sort[0]);
            $this->eventCalender->setOrder($sort[1]);
        }
        $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->get();
        if(isset($user) && !$user->hasRole('admin')){
            $view='user.event.listing';
        }else{
            $view='eventcalenders.events-detail';
        }
        return view($view,[
            'Events' => $Events,
        ]);
    }
    public function renderForm(Request $request,$id){
        $Event = $this->eventCalender->first('id',$id,'=',['user'],[],['event_calenders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        $Event=$this->eventCalender->where('id',$request->id)->first();
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

    public function searchEventsListing(Request $request){
        $user = Auth::user();
        try{
            if(isset($request->search)){

                $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->where(function($query)use($request) {
                        $query->where('title','like', '%' . $request->search . '%')
                        ->orWhere('venue','like', '%' . $request->search . '%')->orWhere('city','like', '%' . $request->search . '%')->orWhere('price','like', '%' . $request->search . '%');
                })->orderBy('id','desc')->get();

            }
            if(isset($request->end_date) && isset($request->start_date)){
                if($request->start_date == ""){
                    $startDate = date('Y-m-d');
                }else{
                    $startDate = date('Y-m-d',strtotime($request->start_date));
                }
                $endDate = date('Y-m-d',strtotime($request->end_date));
                $Events=$this->eventCalender->whereDate('event_date','>=',$startDate)->whereDate('event_date','<=',$endDate)->orderBy('id','desc')->get();
            }
            if(isset($user) && $user->hasRole('user')){
                $view = "user.event.listing";
            }else{
                $view = "eventcalenders.events-detail";
            }
            return view($view,[
                'Events' => $Events,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->get();
            return view('eventcalenders.events-detail',[
                'Events' => $Events,
            ]);
        }
    }

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

    // public function searchEventsListing(Request $request){

    //     try{
    //         if(isset($request->search)){
    //             $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->where(function($query)use($request) {
    //                     $query->where('title',$request->search)
    //                     ->orWhere('venue',$request->search)->orWhere('city',$request->search)->orWhere('price',$request->search);
    //             })->orderBy('id','desc')->get();

    //         }
    //         if(isset($request->end_date) && isset($request->start_date)){
    //             if($request->start_date == ""){
    //                 $startDate = date('Y-m-d');
    //             }else{
    //                 $startDate = date('Y-m-d',strtotime($request->start_date));
    //             }
    //             $endDate = date('Y-m-d',strtotime($request->end_date));
    //             $Events=$this->eventCalender->whereDate('event_date','>=',$startDate)->whereDate('event_date','<=',$endDate)->orderBy('id','desc')->get();
    //         }

    //         return view('eventcalenders.events-detail',[
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

    // public function getEvent(Request $request,$slug){
    //     $Event = $this->eventCalender->first('slug',$slug,'=',['user'],[],['event_calenders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
    //     $this->eventCalender->setLength(10);
    //     // $LatestBlogs = $this->directory->getAll([['users','users.id','=','event_calenders.user_id']],['event_calenders.title','event_calenders.description','event_calenders.created_at','images.image_url','event_calenders.slug']);

    //     return view('event-calenders.events-detail',[
    //         'Event' => $Event,
    //         // 'LatestBlog' => $LatestBlogs,
    //         'title' => trans('lang.eventcalender').' | '. $Event->title
    //     ]);
    // }
}
