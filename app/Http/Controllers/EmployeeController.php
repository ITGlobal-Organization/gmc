<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\Media;
use Auth;
use App\Helpers\Helper;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class EmployeeController extends BaseController
{
    private $spaceFinder,$media,$user;
    public function __construct(User $user,Media $media) {
        $this->user = $user;

        // $this->setModel($user);
        // $this->setMedia($media);
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

    public function employees(Request $request){
        // $user = Auth::user();
        // if(isset($user) && $user->hasRole('user')){
        //     $view = 'user.employee.index';
        // }else{
        //     $view = 'space-finders.space-finders';
        // }
        return view('user.employee.index',[
            'title' => trans('lang.employees'),
            'count' => 0
        ]);
    }

    public function getEmployeesListing(Request $request){

        $this->user->setGeneralFilters($request);
        $this->user->removeGeneralFilters($request);


        $Employees = $this->user->getAll([],['users.*','images.image_url'],[['user_id','=',$this->user->id]]);
        // dd($Employees);
        return view('user.employee.listing',[
            'Employees' => $Employees,
            'count' => $this->user->getCount(),
            'page' => $this->user->getStart()
        ]);
    }

    public function getSpaceFinder(Request $request,$slug){

        // $spaceFinder = $this->spaceFinder->first('slug',$slug,'=',['user'],[],['space_finders.*','DAY(created_at) as day','MONTHNAME(created_at) as month']);
        // $this->spaceFinder->setLength(config('site_confing.constants.item_per_page'));
        // // $LatestBlogs = $this->directory->getAll([['users','users.id','=','directories.user_id']],['directories.title','directories.description','directories.created_at','images.image_url','directories.slug']);

        // return view('space-finders.space-finder-detail',[
        //     'SpaceFinder' => $spaceFinder,
        //     // 'LatestBlog' => $LatestBlogs,
        //     'title' => trans('lang.directory').' | '. $spaceFinder->title
        // ]);
    }

    // public function searchSpaceFinders(Request $request){

    //     $this->spaceFinder->setOrderBy('id');
    //     $this->spaceFinder->setOrder('desc');
    //     $spaceFinder = $this->spaceFinder->getAll();
    //     if(isset($user) && !$user->hasRole('admin')){
    //         $view='user.space-finder.listing';
    //     }else{
    //         $view='sections.space-finders';
    //     }
    //     return view($view,[
    //         'SpaceFinders' => $spaceFinder,
    //     ]);

    // }

    public function renderForm(Request $request,$id){
        $User = $this->user->where('id',$id)->with('image')->first();
        return view('user.employee.edit',['User'=>$User]);
    }
    public function update(Request $request,$id){

            $rules = config('rules.users.edit');
            // dd($request);

            foreach($rules as $key => $rule){
                if(strpos($rule,'unique')){
                    $rules[$key] = $rule.','.$key.','.$id;
                }
            }
            $result = $request->validate($rules);
            if (!empty($request['password'])) {
                $request['password'] = Hash::make($request['password']);
            }
            else {
                unset($request['password']);
            }

            if($request->hasFile('image')){
                $media =  Helper::saveMedia($request->image,"App\Models\User",'main',$id);
            }
            $result = $this->user->whereId($id)->update($request->except(['image','filename','password_confirmation']));
            $response = [
                'success' => true,
                'data'=>[
                    'route'=>route('user.employees')
                ],
                'message'=>'Updated Successfully'
            ];

            return response()->json($response, 200);


    }
    public function destroy(Request $request,$id){
        parent::destroy($request,$id);
        $response = [
            'success' => true,
            'data'=>[
                'route'=>route('user.space-finders')
            ],
            'message'=>'Deleted Successfully'
        ];
        return response()->json($response, 200);
    }
    public function store(Request $request){
        // dd($request);
        $rules = config('rules.users.store');
        $request->validate($rules);

        try {
            DB::beginTransaction();
            $data = $request->except(['_token','password_confirmation','password','role_id','media','image','filename']);
            $data['password'] = Hash::make($request->password);
            $data['is_active'] = 1;
            $data['is_approved'] = 1;

            $user = User::create($data);


            DB::commit();
            $user->assignRole('8');
            DB::commit();
            if($request->hasFile('image')){
                $media =  Helper::saveMedia($request->image,"App\Models\User",'main',$user->id);
            }
            $response = [
                'success' => true,
                'data'=>[
                    'route'=>route('user.employees')
                ],
                'message'=>'Employee Created Successfully'
            ];
            return response()->json($response, 200);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->sendError('Error while inserting (' . $e->getMessage() . ')');
        }

    }

    // public function setGeneralFilters(Request $request)
    // {
    //     $this->user->setLength(($request->has('length') && $request->length != "") ? $request->length : config('site_config.constants.item_per_page'));

    //     $this->user->setStart(($request->has('start') && $request->start != "")?$request->start: 1);
    //     $this->user->setOrderBy(($request->has('orderBy') && $request->orderBy != "")? $request->orderBy : $this->user->getOrderBy());
    //     $this->user->setOrder(($request->has('order') && $request->order != "")? $request->order : $this->user->getOrder());
    // }

    // public function removeGeneralFilters(Request $request)
    // {
    //     $request->request->remove('length');
    //     $request->request->remove('start');

    //     $request->request->remove('order_by');

    //     $request->request->remove('order');
    // }
}
