<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Topic;
use App\Models\Media;

class TopicController extends BaseController
{
    private $topic,$media;
    public function __construct(Topic $topic,Media $media) {

        $this->topic = $topic;
        $this->setModel($topic);
        $this->setMedia($media);
    }

    public function index(Request $request){

        return view('admin.crud.index',[
             'title' => trans('lang.categories'),
             'name'  => trans('lang.category'),
        ]);
    }


    public function categories(Request $request){
        if(isset($request->search) && $request->search != ""){
            $this->category->setFilters(['name','like','%'.$request->search.'%']);
        }
        $Category = $this->category->getAll([],['id','name as text']);
        return $this->sendResponse($Category);
    }

    public function renderCategoriesView(Request $request){
        if($request->ajax()){
            // dd('here');
            return $this->categories($request);
        }
        return view('directories.categories.categories',[
            'title' => trans('lang.directories').' | '.trans('lang.categories'),
            'count' => 0
        ]);
    }

    public function getCategoriesListing(Request $request){
        ///dd('hrer');
        $this->setGeneralFilters($request);
        $this->removeGeneralFilters($request);



        if(isset($request->search) && $request->search != '')
            $this->category->setFilters(['name','like','%'.$request->search.'%']);

        $this->category->setLength(96);
        $Categories = $this->category->getAll([],['id','name','slug']);

        return view('directories.categories.listing',[
            'Categories' => $Categories,
            'count' => $this->category->getCount(),
            'page' => $this->category->getStart(),
            'perPage' => 96
        ]);
    }

    public function forum(Request $request){
        return view('user.forum.index');
    }
}
