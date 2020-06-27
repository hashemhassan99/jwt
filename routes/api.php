<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' =>[ 'api','checkPassword'],'namespace'=>'Api'],function (){

   Route::post('get-main-categories','CategoryController@index');
});
