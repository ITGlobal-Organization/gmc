<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Models\BaseModel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Helpers\Helper;
use App\Models\Media;
use App\Models\Category;



class RegisteredUserController extends BaseController
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    private $user,$Media;

    public function __construct(User $user,Media $media){
        $this->user = $user;
        $this->Media = $media;
        $this->user->setRules();

    }

    public function setGeneralFilters(Request $request)
    {
        $this->user->setLength($request->has('length') ? $request->length : 10);
        $this->user->setStart($request->has('start') ? $request->start : 1);
        $this->user->setOrderBy($request->has('orderBy') ? $request->orderBy : 'created_at');
        $this->user->setOrder($request->has('order') ? $request->order : 'desc');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
        $request->validate($this->user->getRules());
        try {


            DB::beginTransaction();
            $data = $request->except(['_token','password_confirmation','password','role_id','media']);
            $data['password'] = Hash::make($request->password);
            // store user
            // dd($request->role_id);
            $data['is_active'] = 1;
            $data['is_approved'] = 1;

            $user = User::create($data);


            DB::commit();
            $user->assignRole($request->role_id);
            DB::commit();

            if ($request->has('media')) {
                //$response = Helper::saveMedia($request->image,$this->model->class_name,$result->id);

                foreach($request->media as $media){
                   // dd($this->Media);
                    $this->Media->updateByColumn([
                        'model_id' => $user->id,
                    ],$media);
                }
            }

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return $this->sendError('Error while inserting (' . $e->getMessage() . ')');
        }
    }


    public function index(Request $request){
        return view('admin.crud.index',[
             'title' => trans('lang.users'),
             'name'  => trans('lang.user'),
        ]);
    }

    public function create(Request $request){
        if(auth()->user()){
            return view('admin.crud.create',[
                'title' => trans('lang.users').' | '.trans('lang.create'),
                'name' => 'blog',
            ]);
        }
        $categories = Category::get();
        return view('auth.register.'.config('site_config.auth.register_view'),[
            'title' => trans('lang.register'),
            'Categories' => $categories
        ]);
    }

    public function edit(Request $request){
        return view('admin.crud.edit',[
            'title' => trans('lang.users').' | '.trans('lang.edit'),
            'name' => 'blog',
        ]);
    }

    public function render(Request $request){
        try{
            $response = [];
            $this->setGeneralFilters($request);
            $response = $this->user->getRecordDataTable($request);
            return $this->sendResponse($response);
        }catch(\Exception $e){
            dd($e);
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

    }

    public function get(Request $request,$id){
        try{
            $result = User::select('users.id','users.first_name','users.last_name','users.email','users.company','users.phone','users.address','users.username','users.postalcode','model_has_roles.role_id as role_id','users.created_at','users.is_approved','users.tel_no','users.website','users.venue_url','users.facebook_url','users.instagram_url','users.linkedin_url','users.youtube_url')->join('model_has_roles','model_has_roles.model_id','=','users.id')
            ->where('model_has_roles.model_type','=','App\\Models\\User')
            ->where('users.id',$id)
            ->firstorfail();
            $result['media'] = Media::where('model','App\\Models\\User')->where('model_id',  $id)->get();
            return $this->sendResponse($result);
        }catch(\Exception $e){
            dd($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }

    }

    // Update
    public function update(Request $request,$id){

        $rules = $this->user->getRules();

        foreach($rules as $key => $rule){
            if(strpos($rule,'unique')){
                $rules[$key] = $rule.','.$key.','.$id;
            }
        }

        $request->validate($rules);
        if (!empty($request['password'])) {
            $request['password'] = Hash::make($request['password']);
        }
        else {
            unset($request['password']);
        }

        try {
            DB::beginTransaction();
            $data = $request->except(['_token','password_confirmation','role_id','media','gallery']);

           User::where('id',$id)->update($data);


            DB::commit();
            $User = User::findorfail($id);

            if(!$User->hasRole($request->role_id)){
                $User->assignRole($request->role_id);
                DB::commit();
            }

            $this->user->id = $id;
            if ($request->has('media')) {

                foreach($request->media as $media){

                    $this->Media->updateByColumn([
                        'model_id' => $id,
                        'model' => 'App\\Models\\User'
                    ],$media);

                }
            }
            DB::commit();
            // return $id;
            return $this->sendResponse([], trans('messages.success_msg', ['action' => trans('lang.updated')]));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }

    // destroy
    public function destroy(Request $request,$id){
        try{
            DB::beginTransaction();
            $user = User::findorfail($id);
            $status=$user->delete($id);

            DB::commit();
            return $this->sendResponse([],'Your data has been '.trans('messages.success_msg',['action' => trans('lang.delete')]));
        }catch(Exception $e){
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }

    // Get all users for select
    public function getUsers(){

        try{
            $result = User::selectRaw('id,CONCAT(first_name," ",last_name) as text,created_at')
            ->get();
            return $this->sendResponse($result);
        }catch(\Exception $e){
            dd($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }

}
