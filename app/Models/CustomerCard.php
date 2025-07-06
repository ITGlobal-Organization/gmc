<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class CustomerCard extends BaseModel
{
    use HasFactory;

    public function __construct(){
        $this->setRules();
    }

    protected static $table_name = 'customer_cards';
    protected $table = "customer_cards";
    public $class_name = 'App\Models\CustomerCard';

    protected $fillable = [
        'stripe_card_id','user_id','is_default','is_active','is_delete'
    ];
}
