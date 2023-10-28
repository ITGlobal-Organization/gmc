<?php

use App\Helpers\Helper;

if (!function_exists('prefix_route')) {

    function prefix_route($name, $parameters = [], $absolute = true)
    {
        //dd($name);
        $getuserrole = Helper::getuserrole();
        // dd($getuserrole);
        if ($getuserrole == '') {
            //                $name = app()->getLocale() . '.'. $name;
            $name = $name;
        } else {
            //                $name = app()->getLocale() . '.'. $getuserrole .'.'. $name;
            $name = strtolower($getuserrole) . '.' . $name;
        }
       
        return app('url')->route($name, $parameters, $absolute);
    }
}
if (!function_exists('route')) {
    function  route($name, $parameters = [], $absolute = true)
    {
        // dd($name);
        //            $name = app()->getLocale() . '.' . $name;
        $name = $name;
        return app('url')->route($name, $parameters, $absolute);
    }
}
if(!function_exists('custom_asset')){
    function custom_asset($file,$type='images'){
        if($type == 'scripts'){
            $path = asset(config('site_config.assets.js_scripts').$file);
        }else{
            $path = asset(config('site_config.assets.'.$type).$file);
        }
        return $path;
    }
}
if(!function_exists('numberFormat')){
    function numberFormat($number){
       return Helper::numberFormat($number);
    }
}

if(!function_exists('shortenTextLength')){
    function shortenTextLength($text){
        return Helper::shortenTextLength($text);
    }
}
