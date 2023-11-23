<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Media;

class CategoryController extends BaseController
{
    private $category,$media;
    public function __construct(Category $category,Media $media) {
      
        $this->category = $category;
        $this->setModel($category);
        $this->setMedia($media);
    }

    public function index(Request $request){
    
        return view('admin.crud.index',[
             'title' => trans('lang.categories'),
             'name'  => trans('lang.category'),
        ]);
    }


    public function categories(Request $request){
        $Category = $this->category->getAll([],['id','name as text']);
        return $this->sendResponse($Category);
    }


}
