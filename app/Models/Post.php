<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use App\Models\PostReply;
use DB;
use Log;

class Post extends BaseModel
{
    use HasFactory;
   
    protected static $table_name = 'forum_post';
    protected $table = "forum_post";
    public $class_name = 'App\Models\Post';

    protected $fillable = [
        'title','description','is_active','is_delete','posted_by','created_at','updated_at'
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
        $this->setOrderBy('created_at');
        $this->setOrder('desc');
    }

    public function setTableName($tableName){
        $this->table = $tableName;
    }

    public function getTableName(){
        return $this->table;
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['title','like','%'.$request->search.'%']);
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','title','description','is_active','created_at']);

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'title',
                'type' => 'string',
                'html' => false,
                'link' => 'site-pages',
                'link_column' => 'slug',

            ],
            [
                'name' => 'description',
                'type' => 'string',
                'html' => false,
                'link' => 'site-pages',
                'link_column' => 'slug',

            ],
            [
                'name' => 'created_at',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'is_active',
                'type' => 'boolean',
                'html' => false,

            ],
            [
                'name' => 'status',
                'type' => 'boolean',
                'html' => true,
                'condition_column' => 'is_active',
                'class_dynamic' => false,
            ],

        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        [],'is_delete');



        return $result;
    }


    public function getPosts(){
        $this->setGroupBy('forum_post.id');
       
       
        $Posts = $this->getAll([
            ['forum_replies','forum_replies.forum_post_id','=','forum_post.id'],
            ['users','forum_post.user_id','=','users.id'],
            ['images','users.id','=','images.model_id'],
           
        ],['forum_post.title','forum_post.created_at','COUNT(forum_replies.reply) as replies','users.first_name as user','forum_post.slug','forum_post.user_image'],[],'leftjoin');
        
        return $Posts;
    }

    public function getPost($slug){
        return $this->first('slug',$slug,'=',['replies'],[
            ['users','users.id' ,'=', $this->table.'.user_id'],
            ['topics','topics.id' ,'=', $this->table.'.topic_id'],
        ],[$this->table.'.*','users.first_name as user','topics.name as topic','DAY('.$this->table.'.created_at) as day','MONTHNAME('.$this->table.'.created_at) as month']);
    }

    public function setTitleAttribute($title)
    {
        $slug = preg_replace("![^a-z0-9]+!i", "-", strtolower($title));

        if(isset($this->id)){
            $obj = self::where('slug',$slug)->where('id','!=',$this->id)->first();
            $this->attributes['slug'] = $slug.'-'.((int)$this->id);
           
          
        }
        $obj = self::where('slug',$slug)->first();
        if(isset($obj)){
            $this->attributes['slug'] = $slug.'-'.((int)$obj->id+1);
           
        }
        $this->attributes['slug'] = $slug;
        $this->attributes['title'] = $title;
    }


    public function replies(){
        return $this->hasMany(PostReply::class,'forum_post_id');
    }

    public function getAll($join = [], $select = ['*'], $where = [],$joinOp='join')
    {       
        try{
            DB::enableQueryLog();

        
            $data =  static::selectRaw(implode(',', $select));
            // dd($this->has_images);
            if($this->has_images){
                $class = $this->class_name;
                $table = $this->table;
                $data->leftjoin('images',function($leftJoin) use ($class,$table){
                    $leftJoin->on($table.'.id','=','images.model_id')
                    ->where('images.model','like',str_replace('\\','%',$class))
                    ->orwhereNull('images.model');
                });


            }


            if (count($this->getFilters()) > 0) {
                foreach ($this->getFilters() as $condition) {
                    $data->where($condition[0], $condition[1], $condition[2]);
                }
            }

            // if (count($this->getFilters()) > 0) {
            //     foreach ($this->getFilters() as $condition) {
            //         $data->where($condition[0], $condition[1], $condition[2]);
            //     }
            // }

            if (count($join) > 0) {
                foreach ($join as $index => $rel){
                    $data->{$joinOp}($rel[0],$rel[1],$rel[2],$rel[3]);
                }
                // $data = static::with($relation)->selectRaw(implode(',', $select));
            }

        


            $this->setCount(count($data->groupBy($this->getGroupBy())->get()));
            // $this->setCount(count($data->groupBy($this->table.'.'.$this->getGroupBy())->get()));
        
            if($this->getLength() > 0 ){
                // Log::debug(DB::getQueryLog());
                $data = $data->skip($this->getLength() * ($this->getStart() - 1))->take($this->getLength());
            }
            
            if($this->getOrderBy() != ''){
                $data = $data->orderBy($this->getOrderBy(), $this->getOrder());
            }

            if($this->getGroupBy() != ''){
            
               
                $data = $data->groupBy($this->getGroupBy());
            
            }
        
            Log::debug(DB::getQueryLog());
            return $data->get();
        }catch(Exception $e){
            
            Log::error($e);
        
            return [];
        }



    }
 
    // public function getIdFromColumn($column,$value){
    //     return $this->first($column,$value,'=')->id;
    // }
}
