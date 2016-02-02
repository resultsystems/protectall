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

Route::get('/', function () {
    return view('welcome');

});

Route::get('/xx', function () {

    $newEncrypter = new \Illuminate\Encryption\Encrypter(md5('teste'), Config::get('app.cipher'));
    $encrypted = $newEncrypter->encrypt('um texto qualquer');
    echo $encrypted;
    echo '<hr>';
    $newEncrypter = new \Illuminate\Encryption\Encrypter(md5('teste'), Config::get('app.cipher'));
    echo $decrypted = $newEncrypter->decrypt($encrypted);
    echo '<hr>';

    Crypt::supported('sdfdf', 'AES-128-CBC');

    echo Crypt::encrypt('teste');
    echo '<hr>';
    echo Crypt::decrypt('eyJpdiI6InNIK3ZmcjNHaHVLTGs4TFhDc25mQ0E9PSIsInZhbHVlIjoiV0xCd3k0MkFGMTg0aFB3R203SnpYQT09IiwibWFjIjoiM2QwNTA3YWU2ODI2ZDQ0NGZlZmM5MmUwZmRjZDg1ZmJhNzZiNDYxN2NlZWI5M2Q4NTNjYmEzOGJjMzVmMDRkYyJ9');
    exit;

    return view('welcome');
});

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
    Route::group(['prefix' => 'creditcard'], function () {
        Route::get('', 'CreditcardController@all');
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
