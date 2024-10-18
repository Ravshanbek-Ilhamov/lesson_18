<?php

use App\Helpers\Auth;
use App\Helpers\View;

if(!function_exists('dd')){
    function dd(... $data){
        echo '<pre>';
        print_r($data);
        echo '<pre>';
        exit;
    }
}

if(!function_exists('view')){
    function view($view,$title,$models=[]){
        return View::make($view,$title,$models);
    }
}

if(!function_exists('check')){
    function check(){
        return Auth::check();
    }
}

if(!function_exists('get_user')){
    function get_user(){
        return Auth::user();
    }
}

if(!function_exists('api')){
    function api($data){
        header("Content-Type: application/json");
        $json_form = json_encode(['data' => $data],JSON_PRETTY_PRINT);
        return $json_form;
    }
}




?>