<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Innovator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\Media;
use App\Traits\UserTrait;
use App\Notifications\ForumNotifications;
use App\Notifications\NewMessageNotification;
use Auth;
use Log;
class User extends Authenticatable
{


    use HasApiTokens, HasFactory, Notifiable, HasRoles,UserTrait;


    private $length = 10;
    private $start = 1;
    private $orderBy = 'created_at';
    private $order = 'desc';
    private $groupBy = 'id';
    private $filters = [];
    public $class_name = 'App\Models\User';
    protected static $table_name = 'users';
    protected $table = 'users';
    private $select_columns = [];
    private $render_columns = [];
    protected $rules = [];
    protected $has_images = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'phone',
        'company',
        'address',
        'postalcode',
        'email',
        'password',
        'tel_no',
        'venue_url',
        'website',
        'facebook_url',
        'youtube_url',
        'instagram_url',
        'linkedin_url',
        'is_approved',
        'is_active',
        'user_id'
    ];

    protected $appends = ['member_since'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope('is_delete', function (Builder $builder){
            $builder->where('users.is_delete', '=', 0);
        });
    }

    public function getUserNameAttribute()
    {
        return preg_replace('/[^a-zA-Z0-9\']/', '_', $this->attributes['username']);
    }
    public function getMemberSinceAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('M Y');
    }
    public function isBlocked()
    {
        return ($this->is_blocked == 1) ? true : false;
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function getRules(){
        return $this->rules;
    }

    public function setRules($rules=[],$updateRule = false){

        if($updateRule){
            $this->rules = $rules;
        }else{
            if(is_array(config('rules.'.$this->table.'.store'))){
                if(!isset(request()->id) && request()->id  == 0){
                    $this->rules = config('rules.'.$this->table.'.store');
                }else{
                    $this->rules = config('rules.'.$this->table.'.edit');
                }
            }else{
                return false;
            }
        }
    }

    public function setLength($length)
    {
        $this->length = $length > 0 ? $length : $this->length;
    }

    public function setStart($start)
    {
        $this->start = $start > 0 ? $start : $this->start;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setFilters($value)
    {
        $this->filters[] = $value;
    }

    public function getFilter($key)
    {
        return $this->filters[$key];
    }
    public function getFilters()
    {
        return $this->filters;
    }

    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    public function getOrderBy()
    {
        return $this->orderBy;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
    }

    public function getGroupBy()
    {
        return $this->groupBy;
    }

    public function setSelectedColumn($columns){
        $this->select_columns = $columns;
    }
    public function getSelectedColumns(){
        return $this->select_columns;
    }

    public function setRenderColumn($columns){
        $this->render_columns = $columns;
    }
    public function getRenderColumns(){
        return $this->render_columns;
    }

    public function getAllDatatables($relation = [],$select = ['*'] ,$conditions = [],$scope='',$join=[],$where='orwhere')
    {

        if($scope != ''){

            $Model = static::withoutGlobalScope($scope)->selectRaw(implode(',',$select));
        }else{
            $Model = static::selectRaw(implode(',',$select));
        }

        if(!empty($relation)){
            $Model = static::with($relation)->selectRaw(implode(',',$select));
        }
        if (!empty($join)) {
            foreach ($join as $index => $rel){
                $Model->leftjoin($rel[0],$rel[1],$rel[2],$rel[3]);
            }

        }
        $Model->where('first_name', '!=','admin');
        if (!empty($conditions)) {
            foreach ($conditions as $condition) {
                $Model->where($condition[0], $condition[1], $condition[2]);
            }
        }

        // dd($Model->toSql());

        $totalRecord = $Model->count();
        // dd($this);
        foreach ($this->getFilters() as $key => $filter) {
            if($key == 0)
                $Model = $Model->where($filter[0], $filter[1], $filter[2]);
            else
                $Model = $Model->{$where}($filter[0], $filter[1], $filter[2]);
        }


        $totalFilteredRecord = $Model->count();

        $count = 0;
        $response = [];
        $result = $Model->skip($this->getLength() * ($this->getStart() - 1))->take($this->getLength())->orderBy($this->getOrderBy(), $this->getOrder())->groupBy($this->table.'.'.$this->getGroupBy())->get();


        foreach ($result as $key => $row) {
                $count++;
                $data = [];
                $data['sno'] = $count;
                foreach($this->getRenderColumns() as $key => $column) {
                    if($column['html'] && $column['type'] == 'boolean' && $column['class_dynamic']){
                        $data[$column['name']] = '<span class="'.$row->{$column['dynamic_class_column']}.'">' . $row->{$column['name']} . '</span>';
                    }
                    else if($column['html'] && $column['type'] == 'boolean') {
                        $data[$column['name']] = $row->{$column['condition_column']} == 1 ? '<span class="badge badge-success">' . trans('lang.active') . '</span>' : '<span class="badge badge-danger">' . trans('lang.inactive') . '</span>';
                    }
                    else if($column['html'] && $column['type'] == 'string'){
                        $data[$column['name']] = '<a href="'.route($column['link'],$row->{$column['link_column']}).'">'.$row->{$column['name']}.'</a>';
                    }else{
                        $data[$column['name']] = $row->{$column['name']};
                    }
                }

                $response['data'][] = $data;
        }
        $response['totalRecord'] = $totalRecord;
        $response['totalFilterRecords'] = $totalFilteredRecord;
        $response['pages'] = (int)ceil($totalFilteredRecord / $this->getLength());
        if (!isset($response['data'])) {
            $response['data'] = [];
        }
        return $response;
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['first_name','like','%'.$request->search.'%']);
            $this->setFilters(['last_name','like','%'.$request->search.'%']);
            $this->setFilters(['email','like','%'.$request->search.'%']);
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','first_name','last_name','email','company','address','created_at','is_approved']);

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'first_name',
                'type' => 'string',
                'html' => false,

            ],
            [
                'name' => 'last_name',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'email',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'address',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'company',
                'type' => 'string',
                'html' => false,
            ],

            [
                'name' => 'created_at',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'is_approved',
                'type' => 'boolean',
                'html' => false,

            ],
            [
                'name' => 'status',
                'type' => 'boolean',
                'html' => true,
                'condition_column' => 'is_approved',
                'class_dynamic' => false,
            ],


        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        [],'',[]);

        return $result;
    }

    // get Roles

    public function getRoles(){
        $roles = new Role();
        return $roles->getAll([],['id','UPPER(name) as text']);
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format(config('constant.date_format'));
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format(config('constant.date_format'));
    }

    public function image()
    {
        return $this->hasOne(Media::class,'model_id')->where('model','App\Models\User');
    }

    public function forumNotification(){
        $this->setFilters(['id','!=',$this->id]);
        $User = $this->where
        ('id','<>',$this->id)->get();
        try{

            foreach($User as $user){
                $user->notify(new ForumNotifications([
                    'name' => $this->first_name,
                    'message' => trans('message.post_notification_title',[
                        'attribute' => $this->first_name
                    ])
                ]));
            }
        }catch(Exception $e){
            
        }
       
        return ;
    }

    public function newMessageNotification($message){
        try{
            $this->notify(new NewMessageNotification([
                'sender_name' => $message['sender_name'],
                'url' => $message['url'],
                'message' => $message['message'],
            ]));
        }catch(\Exception $e){
            // echo $e;
            Log::error($e);
        }
        return ;   
    }

}
