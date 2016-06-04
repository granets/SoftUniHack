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

Route::get('home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');





Route::get('/mission', 'MissionController@show_form');



Route::post('/mission', 'MissionController@submit_form');


Route::auth();