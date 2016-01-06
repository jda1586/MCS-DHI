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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'DashboardController@index']);

    /* Arboles */
    Route::group(['as' => 'trees.', 'prefix' => 'trees'], function () {
        Route::get('/binary', ['as' => 'binary', 'uses' => 'TreesController@binary']);
        Route::get('/unilevel', ['as' => 'unilevel', 'uses' => 'TreesController@unilevel']);
    });
    /* Miembros */
    Route::group(['as' => 'members.', 'prefix' => 'members'], function () {
        Route::get('/register', ['as' => 'register', 'uses' => 'MembersController@register']);
        Route::post('/register/store', ['as' => 'store', 'uses' => 'MembersController@store']);
        Route::get('/profile', ['as' => 'profile', 'uses' => 'MembersController@profile']);
        Route::get('/commissions', ['as' => 'commissions', 'uses' => 'MembersController@commissions']);
        Route::get('/organization', ['as' => 'organization', 'uses' => 'MembersController@organization']);
    });
    /* Carteras */
    Route::group(['as' => 'wallets.', 'prefix' => 'wallets'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'WalletsController@index']);

    });
    /* Subastas */
    Route::group(['as' => 'auctions.', 'prefix' => 'auctions'], function () {

    });
    /* Perfil */
    Route::group(['as' => 'profile.', 'prefix' => 'profile'], function () {
    });

    Route::match(['post', 'get'], '/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);

    Route::get('/deposits', ['as' => 'deposits', 'uses' => 'DepositsController@index']);
    Route::post('/deposits', ['as' => 'deposits', 'uses' => 'DepositsController@deposits']);
    Route::get('/cashout', ['as' => 'cashout', 'uses' => 'CashOutController@index']);
    Route::post('/cashout', ['as' => 'cashout', 'uses' => 'CashOutController@cashOut']);
});

Route::group([], function () {
    Route::get('/login', ['as' => 'auth.index', 'uses' => 'AuthController@index']);
    Route::post('/login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);

//    ruta temporal para correo
    Route::get('/email',['as' => 'email', 'uses' => 'MembersController@email']);
});