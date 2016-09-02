<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//////////////////////////////////////////////

/*Route::get('/',function(){
    return view('Stu/Login');
});*/
Route::get('/','StuController@index');
Route::get('Stu/cancel','StuController@cancel');
Route::post('Stu/doLogin','StuController@doLogin');
//Route::get('Stu/{id}/delete',['middleware' => 'check','uses' => 'StuController@delete']);
Route::get('Stu/Login',function(){
    return view('Stu/Login');
});
Route::get('Stu/signup',function(){
    return view('Stu/signup');
});
Route::post('Stu/doSignup','StuController@doSignup');
Route::get('Stu/state','StuController@doState');
//Route::resource('Stu','StuController');
//Route::get('Stu/create',['middleware'=>'check','uses' => 'StuController@create']);
//Route::get('Stu/{id}',['middleware' => 'check','uses' => 'StuController@show']);
Route::put('Stu/{id}','StuController@update');
Route::post('Stu','StuController@store');
Route::group(['middleware'=>'check'],function(){
    Route::get('Stu/{id}/delete','StuController@delete');
    Route::get('Stu/create','StuController@create');
    Route::get('Stu/{id}','StuController@show');
});

