<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Scheme;
use App\Models\Card;
use App\Models\Media;
use Illuminate\Validation\ValidationException;
use Helper;

class CardController extends BaseController
{
    //
    private $scheme,$media,$card;
    public function __construct(Scheme $scheme,Media $media,Card $card) {
        $this->scheme = $scheme;
        $this->card = $card;
        $this->setModel($this->card);
        $this->setMedia($media);
    }
// Store Scheme
    public function storeScheme(Request $request){
        $path[] = asset('media/image-not-found.png');
        if($request->hasFile('image')){
            $path = Helper::saveStaticFile($request->file('image'),"media");
            $request->merge([
                'logo' => $path[0],
            ]);
           
        }
       
        
        $this->setModel($this->scheme);
        return parent::store($request);
    }
// Update Scheme
    public function updateScheme(Request $request,$id){
        $path[] = asset('media/image-not-found.png');
        if($request->hasFile('image')){
            $path = Helper::saveStaticFile($request->file('image'),"media");
            $request->merge([
                'logo' => $path[0],
            ]);
           
        }
        
        // dd($request);
        $this->setModel($this->scheme);
        return parent::update($request,$id);
    }

    public function getAllSchemes(Request $request){
        $this->setModel($this->scheme);
        return $this->render($request);
    }

    public function getScheme(Request $request,$id){
        $this->setModel($this->scheme);
        return parent::get($request,id);
    }


    // Card Store
    public function store(Request $request){
        $rules = $this->card->getRules();
       
        try {
            // Validate the incoming request data
            $request->validate($this->card->getRules());

            // Your controller logic goes here if validation passes
        } catch (ValidationException $e) {
            // Return a JSON response with validation errors
            return $this->sendError('',$e->errors(),422,[]);
        }

        try{
            // $NewRequest = $request->duplicate([], null, null, null, null, []);
            if($request->hasFile('image1')){
                $path = Helper::saveStaticFile($request->file('image1'),"media");
                $request->merge([
                    'front' => $path[0]
                ]);
            }
            if($request->hasFile('image2')){
                $path = Helper::saveStaticFile($request->file('image2'),"media");
                $request->merge([
                    'back' => $path[0]
                ]);
            }
            $request->merge([
                'user_id' => auth()->user()->id
            ]);
            $this->card->setRules([],true);
            return parent::store($request);
            

        }catch(Exception $e) {
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

       

    }


    public function update(Request $request,$id){
        $rules = $this->card->getRules();
        foreach($rules as $key => $rule){
            if(strpos($rule,'unique')){
                $rules[$key] = $rule.','.$key.','.$id;
            }
        }
        try {
            // Validate the incoming request data
            $request->validate($this->card->getRules());

            // Your controller logic goes here if validation passes
        } catch (ValidationException $e) {
            // Return a JSON response with validation errors
            return $this->sendError('',$e->errors(),422,[]);
        }

        try{
            // $NewRequest = $request->duplicate([], null, null, null, null, []);
            if($request->hasFile('image1')){
                $path = Helper::saveStaticFile($request->file('image1'),"media");
                $request->merge([
                    'front' => $path[0]
                ]);
            }
            if($request->hasFile('image2')){
                $path = Helper::saveStaticFile($request->file('image2'),"media");
                $request->merge([
                    'back' => $path[0]
                ]);
            }
            $request->merge([
                'user_id' => auth()->user()->id
            ]);
            $this->card->setRules([],true);
            return parent::update($request,$id);
            

        }catch(Exception $e) {
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

       

    }
}
