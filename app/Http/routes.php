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
//Route::get('/login', 'Auth\AuthenticatesAndRegistersUsers@getLogin');
//Route::post('/login', 'Auth\AuthenticatesAndRegistersUsers@postLogin');

Route::post('upload', 'UploadController@file');


Route::group(['middleware' => ['web'], 'namespace'=>'App\Http\Controllers'], function () {
     Route::auth();
});


Route::auth();

Route::get('/', 'CatalogacaoController@list');
Route::get('/home', 'CatalogacaoController@list');
Route::get('/cadastro', 'CatalogacaoController@index');
