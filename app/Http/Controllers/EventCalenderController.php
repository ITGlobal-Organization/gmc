<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\EventCalender;
use App\Models\Media;

class EventCalenderController extends BaseController
{
    private $eventCalender,$media,$user;
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
        return view('eventcalenders.event-calenders',[
            'title' => trans('lang.eventcalenders'),
        ]);
    }
    public function getEventsListing(Request $request){
        if(isset($request->sort_by) && $request->sort_by != ""){
            $sort = explode('-',$request->sort_by);
            $this->eventCalender->setOrderBy($sort[0]);
            $this->eventCalender->setOrder($sort[1]);
        }
        $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->get();
        // $Events = $this->eventCalender->getAll([['users','users.id','=','event_calenders.user_id']],['event_calenders.*','images.image_url']);
        return view('eventcalenders.events-detail',[
            'Events' => $Events,
        ]);
    }

    public function searchEventsListing(Request $request){

        try{
            if(isset($request->search)){
                $Events=$this->eventCalender->where('event_date', '>=', today()->format('Y-m-d'))->where(function($query)use($request) {
                        $query->where('title',$request->search)
                        ->orWhere('venue',$request->search)->orWhere('city',$request->search)->orWhere('price',$request->search);
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

            return view('eventcalenders.events-detail',[
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
