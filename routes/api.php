<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::get("clients", "ClientController@index");
Route::post("clients", "ClientController@store");
Route::get("clients/{id}", "ClientController@show");
Route::put("clients/{id}", "ClientController@update");
Route::delete("clients/{id}", "ClientController@destroy");*/

Route::apiResource("clients", "ClientController");