<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Auth;

class ActiveDataScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        // $user = Auth::user();
        //     $table = $model->$table;
        //     if(isset($user) && !$user->hasRole('admin'))
        //         $builder->where('is_delete', '=', 0)->where('is_active','=',1);
        //     else if(!isset($user))
        //         $builder->where('is_delete', '=', 0)->where('is_active','=',1); 
        //     else
        $builder->where('is_delete', '=', 0);
    }
}