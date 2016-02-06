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

//Constates
define('ACTIVE', 'active');

Route::group(['middleware' => ['auth', 'roles']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'DashboardController@index']);

    /* Arboles */
    Route::group(['as' => 'trees.', 'prefix' => 'trees'], function () {
        Route::get('/', ['as' => 'tee', 'uses' => 'TreesController@tree']);
        Route::get('/binary', ['as' => 'binary', 'uses' => 'TreesController@binary']);
        /*Route::get('/unilevel', ['as' => 'unilevel', 'uses' => 'TreesController@unilevel']);*/
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
        Route::get('/list', ['as' => 'list', 'uses' => 'MembersController@usersList']);
    });
//    ruta de partial
    Route::get('/partial/{user}', ['as' => 'partial', 'uses' => 'MembersController@partial']);

    /* Carteras */
    Route::group(['as' => 'wallets.', 'prefix' => 'wallets'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'WalletsController@index']);
        Route::post('/store', ['as' => 'store', 'uses' => 'WalletsController@store']);
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
        /* Members */
        Route::group(['as' => 'members.', 'prefix' => 'members'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'AdminMembersController@index']);
            Route::get('/addcredit/{user}', ['as' => 'addcredit', 'uses' => 'AdminMembersController@addCredit']);
            Route::post('/add/credit', ['as' => 'addcreditc', 'uses' => 'AdminMembersController@credit']);
        });

        /* Items */
        Route::group(['as' => 'items.', 'prefix' => 'items'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'ItemsController@index']);
            Route::get('/show/{id}', ['as' => 'show', 'uses' => 'ItemsController@show']);
            Route::get('/list/activeItems', ['as' => 'list', 'uses' => 'ItemsController@itemsList']);
            Route::get('/register', ['as' => 'register', 'uses' => 'ItemsController@register']);
            Route::post('/register/store', ['as' => 'store', 'uses' => 'ItemsController@store']);
            Route::get('/desactivate/{id}', ['as' => 'desactivateItem', 'uses' => 'ItemsController@desactivateItem']);
            Route::get('/activate/{id}', ['as' => 'activateItem', 'uses' => 'ItemsController@activateItem']);
            Route::delete('/delete/{id}', ['as' => 'delete', 'uses' => 'ItemsController@delete']);
        });
        
        /* Subastas */
        Route::group(['as' => 'auctions.', 'prefix' => 'auctions'], function () {
            Route::get('/', ['as' => 'index', 'uses' => 'AuctionsController@index']);
            Route::get('/register', ['as' => 'register', 'uses' => 'AuctionsController@register']);
            Route::post('register/store', ['as' => 'store', 'uses' => 'AuctionsController@store']);
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
    Route::get('dash', ['as' => 'index', 'uses' => 'DashboardController@dash']);
});
