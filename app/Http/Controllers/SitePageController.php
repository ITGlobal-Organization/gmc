<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Helpers\Helper;
use App\Models\CustomForm;
use App\Mail\CustomForm as MailForm;
use App\Models\Page;
use App\Models\Product;
use Log;

class SitePageController extends BaseController
{
    //
    private $customForm;
    private $Page;
    private $product;
    public function __construct(CustomForm $customForm,Page $page,Product $product){
        
        $this->customForm = $customForm;
        $this->Page = $page;
        $this->product = $product;
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


    // Get Featured Products top rated
    public function getListingProducts(Request $request){
        $this->product->setLength(8);
        $this->product->setStart(1);
        $this->product->setOrderBy('created_at');
        $className = $this->product->class_name;
        
        $Products = $this->product->getAll([['categories','products.category_id','=','categories.id']],['products.id','products.category_id','products.name','products.description','products.product_code','categories.name as category','images.image_url'],[['products.category_id','=',$request->category]]);
        // dd($request);
        // dd($Products);
        if($request->ajax()){
            return $this->sendResponse($Products);
        }

        return view('sections.wigets.featured-products',[
            'Products' => $Products,
            'category' => $request->category
        ]);
    }

}
