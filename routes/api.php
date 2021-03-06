<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->resource('Material', 'App\Http\Controllers\MaterialController');
        $api->get('/me', function(){
            $data = [
                "name" => "Ajeng S",
                "nickname" => "Ajeng",
                "gender" => "Female",
                "class" => "XII RPL 1",
            ];
            return ['status' => 200, 'data' =>  $data];
        });
        $api->delete('/logout' , 'App\Http\Controllers\AuthController@logout');
    });
    $api->post('/login' , 'App\Http\Controllers\AuthController@login');
    $api->post('/register' , 'App\Http\Controllers\AuthController@register');
});
