<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
class Role extends BaseModel
{
    use HasFactory;
    private $length = 10;
    private $start = 1;
    private $orderBy = 'created_at';
    private $order = 'desc';
    private $groupBy = 'id';
    private $filters = [];
    public $class_name = '';
    protected static $table_name = 'roles';
    protected $table = 'roles';
    private $select_columns = [];
    private $render_columns = [];
    protected $rules = [];
    protected $has_images = false;


    protected $fillable = [
        'id','name','guard',
    ];

    public function __construct(){
        parent::__construct();
        $this->setRules();
    }

    
}
