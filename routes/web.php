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

route::prefix('customer')->group(function (){
    route::get('index', function (){
       return view('modules.customer.index');
    });

    route::get('create', function (){
        return view('modules.customer.create');
    });

    route::post('store', function (){

    });

    route::get('{id}/show', function (){
        return view('modules.customer.show');
    });

    route::get('{id}/edit', function (){
        return view('modules.customer.edit');

    });

    route::patch('{id}/update', function (){


    });

    route::delete('{id}', function (){


    });


});