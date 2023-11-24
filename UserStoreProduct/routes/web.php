<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'v1', 'middleware' => 'web'], function(){

/*     Route::get('/user', function( Request $request ){
        return $request->user();
    });

 */    Route::get('/', function () {
        return view('welcome');
    });
    $a = 0;
    Route::get('/owners', 'App\Http\Controllers\OwnerController@getOwners');

    Route::get('/shops', 'App\Http\Controllers\ShopController@getShops');

    Route::get('/products', 'App\Http\Controllers\ProductController@getProducts');
});
