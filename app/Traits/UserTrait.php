<?php

namespace App\Traits;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Media;
use Log;
// use App\Models\User;

trait UserTrait
{
    // protected $length = 10;
    // protected $start = 1;
    // protected $orderBy = 'created_at';
    // protected $order = 'desc';
    // protected $groupBy = 'id';
    // protected $filters = [];
    // public $class_name = 'App\Models\User';
    // // protected static $table_name = 'user';
    // // protected $table = '';
    // protected $select_columns = [];
    // protected $render_columns = [];
    // protected $rules = [];
    // protected $has_images = true;
    // protected $count = 0;
    // protected  $table_name = "users";

    public function setLength($length)
    {

        $this->length = $length;
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

    public function setCount($count)
    {
        $this->count = $count > 0 ? $count : $this->count;
    }

    public function getCount()
    {
        return $this->count;
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

    public function setSlugAttribute($slug)
    {
        $slug = preg_replace("![^a-z0-9]+!i", "-", strtolower($slug));
        if(isset($this->id)){
            $obj = self::where('slug',$slug)->where('id','!=',$this->id)->first();
            $this->attributes['slug'] = $slug.'-'.((int)$this->id);
            return true;
        }
        $obj = self::where('slug',$slug)->first();
        if(isset($obj)){
            $this->attributes['slug'] = $slug.'-'.((int)$obj->id+1);
            return true;
        }
        $this->attributes['slug'] = $slug;
        return true;
    }
    public function getPriceAttribute()
    {

        if(!isset(request()->id) && !isset(request()->slug) && !isset($this->id)){

            return Helper::priceFormat($this->attributes['price']);
        }
        return $this->attributes['price'];

    }
    // Relation with media
    public function media(){
        return $this->hasMany(Media::class,'model_id')->where('model',$this->class_name);
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

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format(config('constant.date_format'));
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format(config('constant.date_format'));
    }

    public function store($data)
    {
        try{
            $data['created_at'] = Carbon::now();
            foreach($data as $key => $value){
                $this->{$key} = $value;
            }
            $this->save();
            return $this->id;
        }catch(Exception $e){
            Log::error($e->getMessage());
            return false;
        }

    }

    public function updateByColumn($data,$value,$column = 'id')
    {
        try{
            $data['updated_at'] = Carbon::now();
            return static::where($column, $value)->update($data);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return false;
        }

    }

    public function destroyByid($id)
    {
        try{
            if(config('app.APP_ENV') == 'production'){
                $data['updated_at'] = Carbon::now();
                $data['is_delete'] = 1;
                return $this->where('id', $id)->update($data);
            }else{
                return $this->where('id', $id)->delete();
            }
        }catch(Exception $e){
            Log::error($e->getMessage());
            return false;
        }


    }



    public static function getAllRoleById($id)
    {
        return DB::table('roles')->where('id', $id)->first();
    }

    public function insertOrUpdate($data, $where)
    {
        try{
            $data['updated_at'] = Carbon::now();
            $data['created_at'] = Carbon::now();

            $response = static::where($where)->first();
            if (isset($response)) {
                $result = $response->update($data);
                return $response->id;
            }
            return static::insertGetId($data);
        }catch(Exception $e){
            Log::error($e->getMessage());
            return false;
        }

    }

    public function getAll($join = [], $select = ['*'], $where = [])
    {
        // dd($where);
        DB::enableQueryLog();
        $data =  static::selectRaw(implode(',', $select));
          // dd($this->has_images);
          $class = $this->class_name;
            $table = $this->table;
          if($this->has_images){
            $data->leftjoin('images',function($leftJoin) use ($class,$table){
                $leftJoin->on($table.'.id','=','images.model_id')
                ->where('images.model','like',str_replace('\\','%',$class))
                ->orwhereNull('images.model');
            });

        }

        if(! empty($where)){
            foreach ($where as $condition) {
                $data->where($condition[0], $condition[1], $condition[2]);
            }
        }
        if (count($this->getFilters()) > 0) {
            foreach ($this->getFilters() as $condition) {
                $data->where($condition[0], $condition[1], $condition[2]);
            }
        }

        if (count($join) > 0) {
            foreach ($join as $index => $rel){
                $data->join($rel[0],$rel[1],$rel[2],$rel[3]);
            }
            // $data = static::with($relation)->selectRaw(implode(',', $select));
        }

        $this->setCount(count($data->groupBy('users.'.$this->getGroupBy())->get()));

        Log::debug(DB::getQueryLog());
        if($this->getLength() > 0 )
           return $data->skip($this->getLength() * ($this->getStart() - 1))->take($this->getLength())->orderBy($this->table.'.'.$this->getOrderBy(), $this->getOrder())->groupBy($this->table.'.'.$this->getGroupBy())->get();

          
        return $data->groupBy('users.'.$this->getGroupBy())->get();

    }

    public function first($column = 'id', $value = 0, $operator = '=', $relation = [],$join=[],$select=['*'])
    {

        $result = null;
        if (!empty($relation)) {
            $result = static::with($relation)->where($column, $operator, $value);

        }else{
            $result = static::where($column, $operator, $value);
        }
        $result->selectRaw(implode(',', $select));
        if (!empty($join)) {

            foreach ($join as $index => $rel){
                $result->leftjoin($rel[0],$rel[1],$rel[2],$rel[3]);
            }
        }
        $result = $result->firstorfail();
        $result['media'] = Media::where('model',$this->class_name)->where('model_id',  $result->id)->get();

        return $result;
    }

    public function find($id)
    {
        return static::findorfail($id);
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

    // public function getRules(){
    //     return $this->rules;
    // }

    public function deleteByColumn($column,$value){


        if(config('app.APP_ENV') == 'production'){
            $data['updated_at'] = Carbon::now();
            $data['is_delete'] = 1;
            return $this->where($column, $value)->update($data);
        }else{
            return $this->where($column, $value)->delete();
        }
    }

    public function images(){
        return $this->hasMany(Media::class,'model_id')->where('model',$this->class_name);
    }

    public function setGeneralFilters(Request $request)
    {
        // dd($this->model);
        $this->setLength(($request->has('length') && $request->length != "") ? $request->length : config('site_config.constants.item_per_page'));

        $this->setStart(($request->has('start') && $request->start != "")?$request->start: 1);
        $this->setOrderBy(($request->has('orderBy') && $request->orderBy != "")? $request->orderBy : $this->getOrderBy());
        $this->setOrder(($request->has('order') && $request->order != "")? $request->order : $this->getOrder());
    }

    public function removeGeneralFilters(Request $request)
    {
        $request->request->remove('length');
        $request->request->remove('start');

        $request->request->remove('order_by');

        $request->request->remove('order');
    }

}
