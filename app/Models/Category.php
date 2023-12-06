<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use App\Models\Directory;
use Auth;
class Category extends BaseModel
{
    use HasFactory;
    protected static $table_name = 'directory_categories';
    protected $table = "directory_categories";
    public $class_name = 'App\Models\Category';
    
    protected $fillable = [
        'name','slug','is_active','is_delete',
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
    }

    public function parentCategory(){
        return $this->belongsTo(self::class,'category_id')->withDefault([
            'name' => 'NULL',
        ]);
    }

    public function childCategory(){
        return $this->hasMany(self::class,'category_id');
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['name','like','%'.$request->search.'%']); 
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','name','slug','is_active','created_at']);

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'name',
                'type' => 'string',
                'html' => false,
                'link' => 'site-pages',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'slug', 
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

    public function getIdFromColumn($column,$value){
        return $this->first($column,$value,'=')->id;
    }

    // Pivot relation
    public function directories(){
        return $this->belongsToMany(Directory::class,'category_directory');
    }
}
