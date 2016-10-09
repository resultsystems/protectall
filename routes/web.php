<?php

Route::get('/', ['as' => 'home', 'middleware' => ['web', 'auth', 'verifyTwoAuthenticate'], 'uses' => 'HomeController@index']);

Route::group(['middleware' => ['web', 'auth']], function () {
    //Two Authenticate
    Route::group(['middleware' => ['twoAuthenticate']], function () {
        Route::get('/two_authenticate', [
            'uses' => 'Auth\TwoAuthenticateController@index',
        ]);
        Route::post('/two_authenticate', [
            'uses' => 'Auth\TwoAuthenticateController@store',
        ]);
    });
    Route::get('/two_authenticate/activate', [
        'uses' => 'Auth\TwoAuthenticateController@activate',
    ]);
    Route::get('/two_authenticate/deactivate', [
        'uses' => 'Auth\TwoAuthenticateController@deactivate',
    ]);

    Route::group(['middleware' => ['verifyTwoAuthenticate']], function () {

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
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/logout', 'Auth\LoginController@logout');
});
