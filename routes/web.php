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

Route::group(['middleware' => 'aa'], function () {
    Route::get('/a1', 'AController@A1');

    Route::get('/a2', 'AController@A2');
});



Route::group(['prefix'	=>	'bb'],	function()	{
    Route::get('b1', ['as' => 'student', 'uses' => 'BController@B1']);
    Route::get('b2',	['as' => 'student', 'uses' => 'BController@B2']);
});
