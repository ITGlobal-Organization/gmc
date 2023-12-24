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
    // public function __construct(){
    //     $this->rules = config('rules.contact-form');
    // }
    protected $fillable = [
        'name','email','phone','message'
    ];


    public $class_name = 'App\Models\ContactForm';
    protected $table = 'contact_us';

    public function store($request){


        try{
            //dd($request);
            $data['name'] = $request['first_name'];
            $data['phone'] = $request['phone'];
            $data['email'] = $request['email'];
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
            dd($e->getMessage());
            Log::error($e->getMessage());
            return null;
        }

    }
}
