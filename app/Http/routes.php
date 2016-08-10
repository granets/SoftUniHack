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


use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/mission', 'MissionController@show_form');

Route::delete('mission/{mission}', 'MissionController@delete_data');

Route::post('/mission', 'MissionController@submit_form');

Route::get('/level', 'LevelController@show_form');

Route::delete('level/{level}', 'LevelController@delete_data');

Route::post('/level', 'LevelController@submit_form');

Route::auth();

Route::get('/all-monsters', 'MonsterController@show_form');

Route::get('/monsters', 'MonsterController@user_monsters');

Route::post('/monsters', 'MonsterController@submit_form');

Route::delete('/monsters/{monster}', 'MonsterController@delete_data');

Route::get("/awarding/", 'CmAwardingController@show_monsters');

Route::get("/awarding/{id}", 'CmAwardingController@show_form');

Route::post("/awarding", 'CmAwardingController@submit_form');

Route::post('/postChangeLanguage', 'CommonController@postChangeLanguage');

Route::get('/test', 'CommonController@show_form');

Route::get('/classes', 'CmClassController@show_form');

Route::post('/classes', 'CmClassController@submit_form');

Route::delete('/classes/{id}', 'CmClassController@delete_data');

Route::get('/user-code', 'MonsterController@input_code_form');

Route::post('/user-code', 'MonsterController@check_code');

Route::post('/add-code', 'MonsterController@add_code');