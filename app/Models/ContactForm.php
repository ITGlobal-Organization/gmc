<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use App\Helpers\Helper;
use Auth;

use Log;
class ContactForm extends BaseModel
{
    use HasFactory;
    public function __construct(){
        $this->rules = config('rules.contact-form');
    }
    protected $fillable = [
        'first_name','last_name','email','message','subject','custom_fields','phone','make','model','color'
    ];
 

    public $class_name = 'App\Models\ContactForm';
    protected $table = 'contact_forms';

    public function store($request){
        

        try{
            //dd($request);
            $data['first_name'] = $request['first_name'];
            $data['last_name'] = isset($request['last_name'])?$request['last_name']:null;
            $data['email'] = $request['email'];
            $data['phone'] = $request['phone'];
            $data['subject'] = $request['subject'];
            $data['message'] = $request['message'];

            // Mapping Custom Fields(Have to me customized according to the request)
            // $fields = [
            //     'make' => $request['make'],
            //     'color' => $request['color'],
            //     'model' => $request['model'],
            //     'services' => $request['services']
            // ];

            // $data['custom_fields'] = json_encode($fields);
            $response = parent::store($data);
            return $response;

        }catch(Exception $e){
            Log::error($e->getMessage());
            return null;
        }

    }
}
