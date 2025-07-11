<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\BaseModel;
use Auth;
use URL;

class SpaceFinder extends BaseModel
{
    use HasFactory;
    protected static $table_name = 'space_finders';
    protected $table = "space_finders";
    public $class_name = 'App\Models\SpaceFinder';
    public $class_dynamic = true;
    protected $has_images = true;
    public $status_col = 'is_approved';

    protected $fillable = [
        'title','description','is_active','is_delete','is_approved','user_id','slug','categories',
        'mobile_no','phone','address','web_burl','facebook_url','instagram_url','linkedin_url','youtube_url'
    ];

    protected $rules = [];
    public function __construct(){
        parent::__construct();
        $this->setRules();
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        $table = static::$table_name;
        static::addGlobalScope('active_spaces', function (Builder $builder) use ($table) {
            $user = Auth::user();
            $url = URL::current();
            if(isset($user) && $user->hasRole('admin')){
                $builder->where($table.'.is_delete', '=', 0);
            }
            else if(isset($user) && (str_contains($url,"user"))){
                $builder->where($table.'.is_delete', '=', 0)->where($table.'.is_active','=',1)->where('user_id',$user->id);
            }
            else{
                $builder->where($table.'.is_delete', '=', 0)->where($table.'.is_active','=',1)->where($table.'.is_approved',1);
            }

        });
    }


    public function getRecordDataTable($request){
        if($request->has('search') && $request->search !=''){
            $this->setFilters(['title','like','%'.$request->search.'%']);
        }

        $condition = [];
        $result = [];
        $this->setSelectedColumn(['id','title','created_at','is_active','is_approved','mobile_no','address','web_url','email']);

        $this->setRenderColumn([
            [
                'name' => 'id',
                'db_name' => 'id',
                'type' => 'integer',
                'html' => false,
            ],
            [
                'name' => 'title',
                'type' => 'string',
                'html' => false,
                'link' => 'property',
                'link_column' => 'slug',

            ],
            [
                'name' => 'email',
                'type' => 'string',
                'html' => false,
                'link' => 'property',
                'link_column' => 'email',

            ],
            [
                'name' => 'address',
                'type' => 'string',
                'html' => false,
                'link' => 'property',
                'link_column' => 'address',

            ],
            [
                'name' => 'mobile_no',
                'type' => 'string',
                'html' => false,
                'link' => 'property',
                'link_column' => 'mobile_no',

            ],
            [
                'name' => 'web_url',
                'type' => 'string',
                'html' => false,
                'link' => 'property',
                'link_column' => 'web_url',

            ],
            [
                'name' => 'created_at',
                'type' => 'string',
                'html' => false,
            ],
            [
                'name' => 'is_active',
                'type' => 'boolean',
                'html' => false,

            ],
            [
                'name' => 'is_approved',
                'type' => 'boolean',
                'html' => true,
                'condition_column' => 'is_approved',
                'class_dynamic' => false,
            ],


        ]);

        $result = $this->getAllDatatables([],
        $this->getSelectedColumns(),
        [],'',[]);

        return $result;
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function setTitleAttribute($title)
    {
        $slug = preg_replace("![^a-z0-9]+!i", "-", strtolower($title));

        if(isset($this->id)){
            $obj = self::where('slug',$slug)->where('id','!=',$this->id)->first();
            $this->attributes['slug'] = $slug.'-'.((int)$this->id);


        }
        $obj = self::where('slug',$slug)->first();
        if(isset($obj)){
            $this->attributes['slug'] = $slug.'-'.((int)$obj->id+1);

        }
        $this->attributes['slug'] = $slug;
        $this->attributes['title'] = $title;
    }
}
