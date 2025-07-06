<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use App\Helpers\Helper;
use Carbon\Carbon;
use App\Traits\StripeTrait;
use Stripe;

class Payment extends BaseModel
{
    use HasFactory,StripeTrait;
    protected static $table_name = 'payments';
    protected $table = "payments";
    public $class_name = 'App\Models\Payment';
    protected $has_images = false;
    public $stripe;
    protected $fillable = [
        'transaction_id','amount','payment_method','payment_date','user_id','payment_status','is_active','is_delete','status',
        'stripe_payment_id'
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $key = env('STRIPE_SECRET');
        //dd($key);

        if (isset($key)) {
            $this->stripe = new Stripe\StripeClient($key);
        }
        $this->setRules();
    }

    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['users.name','like','%'.$request->search.'%']);
            $this->setFilters(['payments.payment_date','=',$request->search]);
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['payments.id','customers.name as user','payment_methods.name as payment_method','orders.order_code as order_code','payments.payment_date','payments.amount','payments.payment_status','payments.created_at','payments.transaction_id']);
        // $this->setGroupBy('orders.id');

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'order_code',
                'db_name' => 'order_code',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'transaction_id',
                'db_name' => 'transaction_id',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'user',
                'db_name' => 'user',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'payment_method',
                'db_name' => 'payment_method',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'payment_date',
                'db_name' => 'payment_date',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'amount',
                'db_name' => 'amount',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'payment_status',
                'db_name' => 'payment_status',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'created_at',
                'type' => 'string',
                'html' => false,
            ],

        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),[],'',[
            ['customers','customers.id','=','payments.user_id'],
            ['orders','orders.id','=','payments.order_id'],
            ['payment_methods','payment_methods.id','=','payments.payment_method'],
      
        ]);

        return $result;
    }

    public function getAmountAttribute()
    {

        if(!isset(request()->id)){

           
            return Helper::priceFormat($this->attributes['amount']);
        }
        return $this->attributes['amount'];

    }

    public function getPaymentDateAttribute()
    {
        if(!isset(request()->id) ){

            return Carbon::parse($this->attributes['payment_date'])->format(config('constant.date_format'));
        }
        return $this->attributes['payment_date'];

    }
}
 