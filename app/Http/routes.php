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

Route::group(['middleware' => ['auth', 'roles']], function () {
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
        Route::get('/register/payment/{id}', ['as' => 'payment', 'uses' => 'MembersController@payment']);
        Route::post('/register/payment/store/{id}', ['as' => 'payment_store', 'uses' => 'MembersController@payment_store']);

        Route::get('/profile', ['as' => 'profile', 'uses' => 'MembersController@profile']);
        Route::get('/commissions', ['as' => 'commissions', 'uses' => 'MembersController@commissions']);
        Route::get('/organization', ['as' => 'organization', 'uses' => 'MembersController@organization']);
    });
    /* Carteras */
    Route::group(['as' => 'wallets.', 'prefix' => 'wallets'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'WalletsController@index']);
        Route::get('/deposits', ['as' => 'deposits', 'uses' => 'DepositsController@index']);
        Route::post('/deposits', ['as' => 'deposits', 'uses' => 'DepositsController@deposits']);
        Route::get('/cashout', ['as' => 'cashout', 'uses' => 'CashOutController@index']);
        Route::post('/cashout', ['as' => 'cashout', 'uses' => 'CashOutController@cashOut']);
    });

    /* Perfil */
    Route::group(['as' => 'profile.', 'prefix' => 'profile'], function () {

    });

    /* Admins */
    Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
        Route::group(['as' => 'members.', 'prefix' => 'members'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'AdminMembersController@index']);
        });
        /* Items */
        Route::group(['as' => 'items.', 'prefix' => 'items'], function () {
            Route::post('/register/store', ['as' => 'store', 'uses' => 'ItemsController@store']);
            Route::get('/', ['as' => 'index', 'uses' => 'ItemsController@index']);
            Route::get('/{id}', ['as' => 'show', 'uses' => 'ItemsController@show']);
            Route::get('desactivate/{id}', ['as' => 'desactivateItem', 'uses' => 'ItemsController@desactivateItem']);
            Route::get('activate/{id}', ['as' => 'activateItem', 'uses' => 'ItemsController@activateItem']);
            Route::delete('/{id}', ['as' => 'delete', 'uses' => 'ItemsController@delete']);
        });
        /* Subastas */
        Route::group(['as' => 'auctions.', 'prefix' => 'auctions'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'AuctionsController@index']);
        });
    });

    Route::match(['post', 'get'], '/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);

});

Route::group([], function () {
    Route::get('/login', ['as' => 'auth.index', 'uses' => 'AuthController@index']);
    Route::post('/login', ['as' => 'auth.login', 'uses' => 'AuthController@login']);

//    ruta temporal para correo
    Route::get('/email', ['as' => 'email', 'uses' => 'MembersController@email']);

//    ruta temporal para vistas
    Route::get('admin', ['as' => 'admin', 'uses' => 'MembersController@admin']);
    Route::get('partial', ['as' => 'partial', 'uses' => 'MembersController@partial']);
});
