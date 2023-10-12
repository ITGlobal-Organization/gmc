<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use Helper;


class Card extends BaseModel
{
    use HasFactory;


    protected static $table_name = 'cards';
    protected $table = "cards";
    public $class_name = 'App\Models\Card';
    protected $has_images = false;
    
    protected $fillable = [
        'card_no','date_expiry','scheme_id','card_type','cvv','is_financial','user_id','front','back'
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

    public function setCardNoAttribute($value) {
        
        $this->attributes['card_no'] = Helper::encryptString($value);
    }

    public function getCardNoAttribute() {
        return Helper::decryptString($this->attributes['card_no']);
    }

    public function setcvvAttribute($value) {
       
        $this->attributes['cvv'] = Helper::encryptString($value);
    }

    public function getcvvAttribute() {
        return Helper::decryptString($this->attributes['cvv']);
    }

    public function setDateExpiryAttribute($value) {
        $this->attributes['date_expiry'] = Helper::encryptString($value);
    }

    public function getDateExpiryAttribute() {
        return Helper::decryptString($this->attributes['date_expiry']);
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['card_no','like','%'.$request->search.'%']);
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','card_no','back','front','date_expiry','cvv','card_type','is_financial','is_active','created_at']);

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'card_no',
                'type' => 'string',
                'html' => false,
                'link' => 'site-pages',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'cvv', 
                'type' => 'string',
                'html' => false,
                'link' => 'site-pages',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'date_expiry', 
                'type' => 'string',
                'html' => false,
                'link' => 'site-pages',
                'link_column' => 'slug',
                
            ],
            [
                'name' => 'card_type', 
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
        [['is_active','=',1],['user_id','=',auth()->user()->id]],'is_delete');
            
        return $result;
    }
}
