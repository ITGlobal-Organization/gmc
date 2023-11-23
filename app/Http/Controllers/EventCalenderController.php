<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\EventCalender;
use App\Models\Media;
use Auth;

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
        return view('eventcalenders.event-calenders',[
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
            $view='user.events-calendar';
        }else{
            $view='eventcalenders.events-detail';
        }
        return view($view,[
            'Events' => $Events,
        ]);
    }
    public function renderForm(Request $request,$id){

        $Event=$this->eventCalender->where('id',$request->id)->first();
        return view('user.edit.events',['Event'=>$Event]);
    }

    public function update(Request $request,$id){
        parent::update($request,$id);

        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.dashboard')
            ]
        ];

        return response()->json($response, 200);
    }
}
