<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\Directory;
use App\Models\SpaceFinder;
use App\Models\EventCalender;
use DB;

class DashboardController extends BaseController
{
    //
    private $user,$directory,$spaceFinder,$event;
    public function __construct(User $user,Directory $directory,SpaceFinder $spaceFinder,EventCalender $event){
        $this->user = $user;
        $this->directory = $directory;
        $this->spaceFinder = $spaceFinder;
        $this->event = $event;
    }
    public function index(Request $request){
        
        if($request->ajax()){
            $Directories = $this->directory->count();
            $Users = $this->user->count();
            $SpaceFinders= $this->spaceFinder->count();
            $Events = $this->event->count();

            return $this->sendResponse([
                [
                    'title' => trans('messages.count_msg',[
                        'attribute' => trans('lang.user')
                    ]),
                    'count' => $Users,
                    'link' => prefix_route('users.index'),
                    'bg_color' => 'bg-primary'
                ],
                [
                    'title' => trans('messages.count_msg',[
                        'attribute' => trans('lang.directories')
                    ]),
                    'count' => $Directories,
                    'link' => prefix_route('directory.index'),
                    'bg_color' => 'bg-warning'
                ],
                [
                    'title' => trans('messages.count_msg',[
                        'attribute' => trans('lang.space-finder')
                    ]),
                    'count' => $SpaceFinders,
                    'link' => prefix_route('spacefinder.index'),
                    'bg_color' => 'bg-secondary'
                ],
                [
                    'title' => trans('messages.count_msg',[
                        'attribute' => trans('lang.events')
                    ]),
                    'count' => $Events,
                    'link' => prefix_route('eventcalender.index'),
                    'bg_color' => 'bg-danger'
                ]
            ]);
        }
        return view('admin.dashboard',[
            'title' => trans('lang.admin'),
        ]);
    }

    public function getRegistrationsPreMonth(Request $request)
    {

        $year = 'YEAR(NOW())';
        if ($request->has('year') && $request->year != '') {
            $year = $request->year;
        }
        DB::enableQueryLog();
        $PropertiesByDate = Property::withOutGlobalScope('active_properties')
            ->selectRaw('months.short_name as Month,COUNT(properties.created_at) as totalProperties')
            ->rightJoin('months', function ($join) {
                $join->whereRaw('months.month = MONTHNAME(properties.created_at)');
            })
            ->whereRaw('YEAR(properties.created_at) = ' . $year)

            ->orWhereNull('properties.created_at')
            ->groupBy('months.month')
            ->orderBy('months.id');
        // $db = DB::getQueryLog();
        // dd($PropertiesByDate);
        

        $RecentQueries = ContactForm::where('is_delete', 0)
            ->orderBy('created_at', 'desc')
            ->limit(5)->get();

        return $this->sendResponse([
            'status' => true,
            'PropertiesByDate' => [
                'PropertiesCount' => $PropertiesByDate->pluck('totalProperties'),
                'Months' => $PropertiesByDate->pluck('Month'),
            ],
        
            'RecentQueries' => $RecentQueries,

        ]);
    }
}
