<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   
       
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    //    dd('here');
        return [
            'name' => ['required',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max')],
            'email' => ['required','unique:users,email','email'],
            'phone' => ['required','string',config('constant.form_attributes.phone.min'),config('constant.form_attributes.phone.max')],
            'age' => ['required','integer'],
            'dob'  => ['required','date'],
        ];
    }

    
    public function messages(){
        return [
            
            
        ];
    }

}
