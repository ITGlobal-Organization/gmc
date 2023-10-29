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
}
