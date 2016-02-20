<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', ['as' => 'home', 'middleware' => ['web', 'auth'], 'uses' => 'HomeController@index']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web', 'auth']], function () {
    //Creditcard
    Route::group(['prefix' => 'creditcard/', 'as' => 'creditcard.'], function () {
        Route::get('', ['as' => 'all', 'uses' => 'CreditcardController@all']);
        Route::get('{id}', ['as' => 'get', 'uses' => 'CreditcardController@get']);
        Route::post('{id}/decrypt', ['as' => 'decrypt', 'uses' => 'CreditcardController@decrypt']);
        Route::post('', ['as' => 'store', 'uses' => 'CreditcardController@store']);
        Route::put('{id}', ['as' => 'update', 'uses' => 'CreditcardController@update']);
        Route::delete('{id}', ['as' => 'delete', 'uses' => 'CreditcardController@delete']);
    });

    //Anything/Text
    Route::group(['prefix' => 'text/', 'as' => 'text.'], function () {
        Route::get('', ['as' => 'all', 'uses' => 'TextController@all']);
        Route::get('{id}', ['as' => 'get', 'uses' => 'TextController@get']);
        Route::post('{id}/decrypt', ['as' => 'decrypt', 'uses' => 'TextController@decrypt']);
        Route::post('', ['as' => 'store', 'uses' => 'TextController@store']);
        Route::put('{id}', ['as' => 'update', 'uses' => 'TextController@update']);
        Route::delete('{id}', ['as' => 'delete', 'uses' => 'TextController@delete']);
    });

    //Username
    Route::group(['prefix' => 'username/', 'as' => 'username.'], function () {
        Route::get('', ['as' => 'all', 'uses' => 'UsernameController@all']);
        Route::get('{id}', ['as' => 'get', 'uses' => 'UsernameController@get']);
        Route::post('{id}/decrypt', ['as' => 'decrypt', 'uses' => 'UsernameController@decrypt']);
        Route::post('', ['as' => 'store', 'uses' => 'UsernameController@store']);
        Route::put('{id}', ['as' => 'update', 'uses' => 'UsernameController@update']);
        Route::delete('{id}', ['as' => 'delete', 'uses' => 'UsernameController@delete']);
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});
