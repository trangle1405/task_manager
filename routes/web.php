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

Route::prefix('customer')->group(function () {

    Route::get('index', 'CustomerController@index');

    Route::get('create', 'CustomerController@create');

    Route::post('store', 'CustomerController@store');

    Route::get('{id}/show', 'CustomerController@show');

    Route::get('{id}/edit', 'CustomerController@edit');

    Route::patch('{id}/update', 'CustomerController@update');

    Route::delete('{id}', 'CustomerController@destroy');

});

Route::prefix('tasks')->group(function () {
   route::get('index', 'TaskController@index');

   route::get('create', 'TaskController@create');

   route::post('store', 'TaskController$store');

   route::get('{id}/show', 'TaskController@show');

   route::get('{id}/edit', 'TaskController@edit');

   route::put('{id}/update', 'TaskController@update');

   route::delete('{id}', 'TaskController@delete');

});