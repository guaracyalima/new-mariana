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

Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){

    Route::get('upload', ['as' => 'upload', 'uses' =>'UploaderController@index']);
    Route::get('upload/create', ['as' => 'upload.create', 'uses' =>'UploaderController@create']);
    Route::get('upload/edit/{id}', ['as' => 'upload.edit', 'uses' =>'UploaderController@edit']);
    Route::get('upload/show/{id}', ['as' => 'upload.show', 'uses' =>'UploaderController@show']);
    Route::post('upload/store', ['as' => 'upload.store', 'uses' =>'UploaderController@store']);
    Route::post('upload/update/{id}', ['as' => 'upload.update', 'uses' =>'UploaderController@update']);
    Route::get('upload/destroy/{id}', ['as' => 'upload.destroy', 'uses' =>'UploaderController@destroy']);

    Route::get('asset/create/{id}', ['as' => 'asset.create', 'uses' =>'AssetsController@create']);
    Route::post('asset/store', ['as' => 'asset.store', 'uses' =>'AssetsController@store']);
    Route::get('asset/show/{album_id}', ['as' => 'asset.show', 'uses' =>'AssetsController@show']);
});