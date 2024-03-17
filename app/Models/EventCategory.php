<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use Carbon\Carbon;
use Auth;

class EventCategory extends BaseModel
{
    use HasFactory;

    protected static $table_name = 'event_categories';
    protected $table = "event_categories";
    public $class_name = 'App\Models\EventCategory';
    public $class_dynamic = true;
    protected $has_images = false;
    public $status_col = 'is_active';

    protected $fillable = [
       'name','is_active','is_delete','created_at','updated_at'
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
        $this->setOrderBy('id');
        $this->setOrder('asc');
    }
}
