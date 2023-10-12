<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Invite extends BaseModel
{
    use HasFactory;
    protected static $table_name = 'invites';
    protected $table = "invites";
    public $class_name = 'App\Models\Invite';
    protected $has_images = false;
    
    protected $fillable = [
        'user_id','email','expire_at','ref_token','created_at','updated_at','is_expired'
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
