<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use App\Models\Post;

class PostReply extends BaseModel
{
    use HasFactory;
    protected static $table_name = 'forum_replies';
    protected $table = "forum_replies";
    public $class_name = 'App\Models\PostReply';


    protected $fillable = [
        'reply','is_active','is_delete','created_at','updated_at'
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
        $this->setOrderBy('created_at');
        $this->setOrder('desc');
    }


    public function post(){
        return $this->belongsTo(Post::class,'forum_post_id');
    }
}
