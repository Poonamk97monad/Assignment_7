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

Route::get('/', function () {
    return view('welcome');
});
//
Route::resource('resources','ResourcesController');
//Route::post('resources/resource/add-to-collection/{id}','ResourcesController@postAddToCollection');
//Route::post('remove-to-collection/{id}','ResourcesController@postRemoveToCollection');
//Route::post('add_favorites_resource/{id}','ResourcesController@postSetFavorite');
//
//
Route::resource('collections','CollectionsController');
//Route::post('collections/collection/add-to-resources/{id}','CollectionsController@postAddToResource');
//Route::post('remove-to-resources/{id}','CollectionsController@postRemoveToResource');
//Route::post('add_favorites_collection/{id}','CollectionsController@postSetFavorite');
//
//
//Route::get('/search','ResourcesController@search');
//
//
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/submit', 'ContactFormController@store');

Route::get('resources/search/search', 'ResourcesController@search');

Route::post('collections/search', 'CollectionsController@collectionSearch');

Route::post('collections/search/data', 'ResourcesController@searchResourceCollection');
