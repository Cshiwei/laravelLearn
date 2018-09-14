<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('test',array('name'=>'phper'));
});

Route::get('/learn','TestController@learn');

Route::any('/any','TestController@any');

Route::match(['get','post'],'/match','TestController@match');

//Route::view('/test','test',['name'=>'phper']);
Route::get('/param',function(){
    return 'no param';
});

Route::get('/param/{name?}',function($name='chen'){
    return $name;
});

Route::get('/name/{name}/age/{age}','TestController@message');

//Route::get('/user/profile','TestController@profile')->name('profile');

Route::get('/user/profile/{name}','TestController@profile')->name('profile');



