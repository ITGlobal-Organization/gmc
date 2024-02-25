<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;

class Post extends BaseModel
{
    use HasFactory;
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
        $this->setOrderBy('title');
        $this->setOrder('asc');
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

    // public function getIdFromColumn($column,$value){
    //     return $this->first($column,$value,'=')->id;
    // }
}
