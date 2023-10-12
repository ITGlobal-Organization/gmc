<?php
namespace App\Traits;
use Illuminate\Validation\Rules;

trait Validation{
    // private $user;
    // public function __construct()
    // {
    //     $this->user = auth()->user();
    // }
    public function username(){
        return [config('constant.form_attributes.username.min'),config('constant.form_attributes.username.max'),config('constant.form_attributes.username.regex'),'unique:users,username,'.auth()->user()->id];
    }

    public function first_name(){
       return  ['required',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max'),config('constant.form_attributes.name.regex')];
    }

    public function last_name(){
        return  ['required',config('constant.form_attributes.name.min'),config('constant.form_attributes.name.max'),config('constant.form_attributes.name.regex')];
    }

    public function email(){
        return ['unique:users,email,'.auth()->user()->id,'email',config('constant.form_attributes.email.min'),config('constant.form_attributes.email.max'),'email_not_in:role_id'];
    }

    public function password(){
        return ['required','confirmed', config('constant.form_attributes.password.max'),Rules\Password::min(config('constant.form_attributes.password.min'))
        ->mixedCase()
        ->letters(1)
        ->numbers(1)
        ->symbols(1)];
    }

    public function about(){
        return ['required',config('constant.form_attributes.address.min'),config('constant.form_attributes.address.max')];
    }

    public function address(){
        return ['required',config('constant.form_attributes.about.min'),config('constant.form_attributes.about.max')];
    }

    public function city(){
        return ['required',config('constant.form_attributes.city.min'),config('constant.form_attributes.city.max'),config('constant.form_attributes.city.regex')];
    }

    public function state(){

        return ['required',config('constant.form_attributes.state.min'),config('constant.form_attributes.state.max'),config('constant.form_attributes.state.regex')];

    }

    public function country(){
        return  ['required',config('constant.form_attributes.city.min'),config('constant.form_attributes.city.max'),config('constant.form_attributes.city.regex')];
    }

    public function zipcode(){
        return ['required',config('constant.form_attributes.zipcode.min'),config('constant.form_attributes.zipcode.max'),config('constant.form_attributes.zipcode.regex')];
    }

    public function profile(){
        return ['valid_base64_image','validate_profile_dimension:'.implode(',',config('constant.images.profile-dimensions'))];
    }
}
