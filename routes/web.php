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

Route::get("/","PostsController@index");
Route::get("/post/create","PostsController@create");
Route::post("/post/store","PostsController@store")->name("storeposts");
Route::get("/home", function(){
	return "hello";
})->name("redirect");

