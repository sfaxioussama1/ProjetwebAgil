<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware('api')->group(function (){

    Route::prefix('products')->group(function (){

        Route::get('/', 'Api\ProductApiController@index')->name('products.api.index');

        Route::post('/store', 'Api\ProductApiController@store')->name('products.api.store');
        Route::get('/{id}/show', 'Api\ProductApiController@show')->name('products.api.show');
        /*Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
        Route::post('/{id}/update', 'ProductController@update')->name('products.update');
        Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');*/

    });

Route::prefix('customers')->group(function (){

   // Route::get('/', 'Api\CustomerController@index')->name('customers.index');
    Route::get('/create', 'Api\CustomerController@create')->name('customers.create');
   // Route::post('/store', 'Api\CustomerController@store')->name('customers.store');
    //Route::get('/{id}/show', 'Api\CustomerController@show')->name('customers.show');
    /*Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::post('/{id}/update', 'ProductController@update')->name('products.update');
    Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');*/

});

//});

