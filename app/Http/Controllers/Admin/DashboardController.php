<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Developer;
use App\Models\Property;
use App\Models\ContactForm;
use DB;

class DashboardController extends BaseController
{
    //
    public function index(){
        
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
