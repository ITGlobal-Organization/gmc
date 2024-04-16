<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\EventCalender;
use App\Models\Payment;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;
use URL;
use DB;
use Log;

class EventCalenderController extends BaseController
{
    private $eventCalender,$media,$url;

    public function __construct(EventCalender $eventCalender,Media $media,URL $url,Payment $payment) {
        $this->eventCalender = $eventCalender;
        $this->payment = $payment;
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
        $Categories = $this->eventCalender->getCategories();
        if(isset($user) && $user->hasRole('user')  && str_contains($this->url,"user")){
            $view= 'user.event.index';
        }else{
            $view= 'eventcalenders.event-calenders';
        }
        return view($view,[
            'title' => trans('lang.eventcalenders'),
            'count' => 0,
            'Categories' => $Categories
        ]);
    }
    public function getEventsListing(Request $request){
        // dd($request);
        $user = Auth::user();
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);
        $Categories = $this->eventCalender->getCategories();
        // $search = "tit";
        $AllEvents = $this->eventCalender->getAll([],['event_calenders.*','images.image_url']);
        // DB::enableQueryLog();
        // $a=$this->eventCalender->Where('title', 'like', '%' . $search . '%')->get();

        if(isset($request->search) && $request->search != '') {
            $this->eventCalender->setFilters(['title','like','%'.$request->search.'%']);
        }

        if(isset($request->category_id) && $request->category_id != 0) {
            $this->eventCalender->setFilters(['category_id','=',$request->category_id]);
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
        if(isset($user) &&  $user->hasRole('user') && str_contains($this->url,"user")){
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
            'page' => $this->eventCalender->getStart(),
            'Categories' => $Categories
        ]);
    }
    public function renderForm(Request $request,$id){
        $Event = $this->eventCalender->first('id',$id,'=',['user'],[],['event_calenders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        $Categories = $this->eventCalender->getCategories();
        // $Event=$this->eventCalender->where('id',$request->id)->first();
        return view('user.event.edit',['Event'=>$Event,'Categories' => $Categories]);
    }

    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $media =  Helper::saveMedia($request->image,"App\Models\EventCalender",'main',$id);
        }
        if(!auth()->user()->hasRole('admin')){
            $request->merge([
                'category_id' => 2
            ]);
        }
        parent::update($request,$id);

        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.events')
            ],
            'message'=>'Updated Successfully'
        ];

        return $this->sendResponse($response);
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
        return $this->sendResponse($response);
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
        if(!auth()->user()->hasRole('admin')){
            $request->merge([
                'category_id' => 2
            ]);
        }
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
        return $this->sendResponse($response,trans('messages.success_msg',[
            'action'=> trans('lang.save'),
            'attribute' => trans('lang.event')
         ]));
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
        parent::setGeneralFilters($request);
        if($request->has('not_approved')){
            $this->eventCalender->setFilters(['is_approved','=',0]);
        }
    }

    public function getCategories(Request $request){
        $categories = $this->eventCalender->getCategories();
        //dd($categories);
        return $this->sendResponse($categories);
    }

    public function userCreateEvent(Request $request){
        $Categories = $this->eventCalender->getCategories();
        return view('user.event.create',[
            'title' => trans('messages.create_msg',[
                'attribute' => trans('lang.event'),

            ]),
            'Categories' => $Categories
        ]);
    }

    // book now

    public function bookEventView(Request $request,$slug){
        $Event = $this->eventCalender->first('slug',$slug,'=');
        return view('eventcalenders.book',[
            'title' => trans('lang.event') . ' | '. trans('lang.book'),
            'Event' => $Event,
        ]);
    }

    public function bookEvent(Request $request){

        $this->eventCalender->setRules(config('rules.event_calenders.bookings'),true);
        $request->validate($this->eventCalender->getRules());
        try{

            $event = $this->eventCalender->first('id',$request->event_id);
            $data = $request->except('_token');
            $status=$this->eventCalender->addBookings($data);

            $this->eventCalender->where('id',$request->event_id)->increment('current_bookings');

            if($status > 0){
                $array = ['route'=>route('event-calenders.index')];
                if($event->price != "FOC" && $event->price >= 1){
                    $customer =$this->payment->addStripeCustomer($data['first_name'].' '.$data['last_name'],$data['email']);
                    session(['customer' => $customer]);
                    session(['booking_id' => $status]);
                    $array = [];
                }

                return $this->sendResponse($array,trans('messages.success_msg',[
                    'attribute' => trans('lang.booking'),
                    'action' => trans('lang.saved')
                ]));
            }

        }catch(\Exception $e){
            dd($e->getMessage());
            Log::error($e);
            return $this->sendError(trans('messages.error_msg',['action' => trans('lang.saving')]));
        }
    }
}
