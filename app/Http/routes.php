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
Route::get('/Login', function () {
    return view('register');
});

/*Route::group(['prefix' => 'reports', 'as' => 'reports::'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'ReportsController@index']);
    Route::get('/single', ['as' => 'single', 'uses' => 'ReportsController@single']);
    Route::get('/invoice',['as'=>'invoice','uses' => 'PdfController@invoice']);
});*/
