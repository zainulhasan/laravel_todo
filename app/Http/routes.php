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

Route::auth();

Route::get('/home', [

    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/delete/{id}', [

    'as'   =>  'delete',
    'uses' =>   'HomeController@delete_todo'
]);


Route::get('/new',[

    'as' => 'new',
    'uses' => 'HomeController@new_todo'
]);

Route::post('/create','HomeController@create_todo');