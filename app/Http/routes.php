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

Route::get('/', function () {
    return view('welcome');
});
Route::get("home/index","HomeController@index");
Route::get("home/acreditacion","HomeController@acreditacion");
Route::get("home/registro","HomeController@registro");
Route::get("home/estampado","HomeController@estampado");
Route::get("home/forense","HomeController@forense");
Route::get("home/noticiaid/{id}","HomeController@noticiaid");
Route::get('home/noticias','HomeController@noticias');
Route::get('home/noticias/{id}', 'HomeController@show')->where(['id' => '[0-9]+']);
Route::get('home/biblioteca',"HomeController@biblioteca");


		