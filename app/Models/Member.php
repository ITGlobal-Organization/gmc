<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Member extends BaseModel
{
    use HasFactory;

    protected static $table_name = 'members';
    protected $table = "members";
    public $class_name = 'App\Models\Member';
    protected $has_images = true;
    
    protected $fillable = [
        'user_id','member_id'
    ];

    protected $columnAlias = [
        'user' => 'user_id',
        'member' => 'member_id'
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
    }

    
}
