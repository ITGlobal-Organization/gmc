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
       
        return [
            // 'name' => ['required',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max')],
            
            'password' => ['required', config('constant.form_attributes.password.max'),Rules\Password::min(config('constant.form_attributes.password.min'))
            ->mixedCase()
            ->letters(1)
            ->numbers(1)
            ->symbols(1)],
            'email' => ['required','unique:users,email','email'],
            // 'phone' => ['required','string','min:'.config('constant.form_attributes.phone.min'),'max:'.config('constant.form_attributes.phone.max')],
            'company' => ['required','max:'.config('constant.form_attributes.name.max')],
            'address' => ['required']
            
            
        ];
    }

    public function messages(){
        return [
            
            
        ];
    }
}
