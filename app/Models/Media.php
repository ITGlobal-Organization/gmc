<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Media extends BaseModel 
{
    use HasFactory;
    protected $table = 'images';
    protected static $table_name = 'images';
    public $class_name = 'App\Models\Media';

    protected $fillable = ['model_id','model','image_url','is_delete','image_name','img_type','extension'];

    
}
