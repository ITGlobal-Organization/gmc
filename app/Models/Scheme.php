<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Scheme extends BaseModel
{
    use HasFactory;


    protected static $table_name = 'schemes';
    protected $table = "schemes";
    public $class_name = 'App\Models\Scheme';
    protected $has_images = false;
    
    protected $fillable = [
        'name','imd','logo'
    ];

    protected $columnAlias = [
        'name' => 'name',
        'imd' => 'logo',
        'imd' => 'imd',
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['name','like','%'.$request->search.'%']);
            $this->setFilters(['imd','like','%'.$request->search.'%']);   

        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','name','imd','is_active','created_at']);

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
                'name' => 'imd', 
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

        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        [['is_active','=',1]],'is_delete');
            
        return $result;
    }
}
