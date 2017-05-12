<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loqaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');

$api -> version('v1', function($api)
{
    $api -> get('all', 'App\Http\Controllers\v1\testController@index');
    $api -> get('elective', 'App\Http\Controllers\v1\testController@index');
});
