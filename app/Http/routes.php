<?php

Route::post('upload', 'UploadController@file');


Route::group(['middleware' => ['web'], 'namespace'=>'App\Http\Controllers'], function () {
     Route::auth();
});

///App::setLocale('pt-BR');

Route::get('language','LangController@language');
Route::auth();

Route::get('/', 'CatalogacaoController@list');
Route::get('/home', 'CatalogacaoController@list');


/*
 *  Route::get('/', function () {
	return view('welcome');
});*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('catalogacao', 'CatalogacaoController');

    /*
    Route::post('/cadastro', 'CatalogacaoController@store');
    Route::get('/edit{id}', 'CatalogacaoController@edit');
    */
});
