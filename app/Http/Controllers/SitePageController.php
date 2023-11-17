<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Helpers\Helper;
use App\Models\CustomForm;
use App\Mail\CustomForm as MailForm;
use App\Models\Page;
use App\Models\Blog;
use App\Models\EventCalender;
use App\Models\PlatinumPartner;
use Carbon\Carbon;

use Log;

class SitePageController extends BaseController
{
    //
    private $customForm;
    private $Page;
    private $product;
    public function __construct(CustomForm $customForm,Page $page,EventCalender $eventCalender,PlatinumPartner $platinumPartners,Blog $news){
        $this->eventCalender = $eventCalender;
        $this->platinumPartners = $platinumPartners;
        $this->customForm = $customForm;
        $this->news = $news;
        $this->Page = $page;

    }

    public function renderMainPage(Request $request){

        try{

            $Page = Page::where('is_active',1)->where('is_home_page',1)->first();
            return view(config('site_config.assets.home_pages').$Page->view,[
                'title' => $Page->name,
            ]);

        }catch(\Exception $e){

            return view(config('site_config.assets.home_pages').'indexv1',[
                'title' => 'Home',
            ]);
        }



    }

    public function renderSitePages(Request $request,$page){


        $Page = Page::where('is_active',1)->where('slug',$page)->first();
        try{

            if(!isset($Page)){
                // if($page == 'blogs'){
                //     return redirect()->route('blogs');
                // }
                return view(config('site_config.assets.pages').$page,[
                    'title' => strtoupper(str_replace('-',' ',$page)),
                    'Page' => null,
                ]);
            }
            else if($Page->is_home_page){
                return redirect()->route('home');
            }
            else if($Page->has_custom_view){

                return view(config('site_config.assets.pages').$Page->view,[
                    'title' => $Page->name,
                    'Page' => $Page,
                ]);
            }else{
                return view(config('site_config.assets.pages').'page',[
                    'title' => $Page->name,
                    'Page' => $Page,
                ]);
            }
        }catch(\Exception $e){
            Log::error($e->getMessage());
            abort(404);
        }



    }

    public function storeCustomForm(Request $request){

        $request->validate([
            'first_name' => 'required',
            'email' =>'required|email',
            'phone_no' =>'required|integer',
            'address' =>'required',
            'message' =>'required'
        ]);
        $path = "NULL";


        $form = [];

        foreach($request->input() as $key => $value){
            $form[] = [
                'key' => $key,
                'name' => ucwords(str_replace('_',' ',$key)),
                'value' => $value,
            ];
        }


        //dd($request->file);
        if($request->hasFile('file')){
            $path = Helper::moveNormalFile($request->file('file'),'quotes');
            array_push($form,[
                'key' => 'path',
                'name' => 'Attachment',
                'value' => $path,
            ]);

        }
        // Setting data;

        $data['form_data'] = json_encode($form);
        $data['name'] = 'Get A Quote Form';
        $data['slug'] = 'get-a-quote';

        $response = $this->customForm->store($data);
        if($response){
            $message = Helper::sendMail(env('MAIL_FROM_ADDRESS'),new MailForm($form));
            if($message ==""){
                return $this->sendResponse([],'Your response has been '.trans('messages.success_msg',['action' => trans('lang.save')]));
            }else{
                return $this->sendResponse([],$message);
            }

        }
    }

    public function benefitsTab(Request $request){

    }

    public function eventsTab(Request $request){
        $this->eventCalender->setOrderBy('id');
        $this->eventCalender->setOrder('desc');
                // Get today's date
        $today = Carbon::now();
        $todayFomat = $today->format('Y-m-d');
        // Get the date one month after today
        $oneMonthAfter = $today->addMonth();
        $this->eventCalender->setFilters( ['event_date','>=',$todayFomat]);
        $this->eventCalender->setFilters(  ['event_date','<=',$oneMonthAfter->format('Y-m-d')]);


        $Events = $this->eventCalender->getAll([],['event_calenders.*','images.image_url']);

        return view('tabs.events',[
            'Events' => $Events,
        ]);
    }

    public function newsTab(Request $request){
        $this->news->setOrderBy('id');
        $this->news->setOrder('desc');
        $News = $this->news->getAll([],['blogs.*','images.image_url']);

        return view('tabs.news',[
            'News' => $News,
        ]);
    }

    public function platinumPartnersTab(Request $request){

        if($request->limit){
            $view = 'tabs.footer-platinum-partners';
        }else{
            $view = 'tabs.platinum-partners';
        }
        $this->platinumPartners->setOrderBy('id');
        $this->platinumPartners->setOrder('desc');
        $platinumPartners = $this->platinumPartners->getAll([],['platinum_partners.*','images.image_url']);
        return view($view,[
            'PlatinumPartners' => $platinumPartners,
        ]);
    }

    public function allTab(Request $request){
        $this->news->setOrderBy('id');
        $this->news->setOrder('desc');
        $News = $this->news->getAll([],['blogs.*','images.image_url']);

        $this->eventCalender->setOrderBy('id');
        $this->eventCalender->setOrder('desc');
            $today = Carbon::now();
        $todayFomat = $today->format('Y-m-d');
        // Get the date one month after today
        $oneMonthAfter = $today->addMonth();
        $this->eventCalender->setFilters( ['event_date','>=',$todayFomat]);
        $this->eventCalender->setFilters(  ['event_date','<=',$oneMonthAfter->format('Y-m-d')]);
        $Events = $this->eventCalender->getAll([],['event_calenders.*','images.image_url']);

        return view('tabs.all',[
            'News' => $News,
            'Events' => $Events
        ]);
    }

    public function contactUs(Request $request){
        $response = $this->contactForm->store($request);
        $response = [
            'success'=>true,
            'message'=>'Your form has been submitted',
            'route'=>'/',
            'data'=>[
                'route'=>'/'
            ]
        ];
        return response()->json($response);
    }
}
