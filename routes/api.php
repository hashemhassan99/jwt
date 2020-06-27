<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' =>[ 'api','checkPassword','changelanguage'],'namespace'=>'Api'],function (){

   Route::post('get-main-categories','CategoryController@index');
   Route::post('get-category-by-id','CategoryController@getCategoryById');
   Route::post('change-category-status','CategoryController@changeStatus');
});
