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

Route::get('/index', 'ProductController@index')->name('index');
Route::get('/addCart/{id}', 'ProductController@addCart')->name('addCart');
Route::get('/shoppingCart', 'ProductController@getCart')->name('shoppingCart');
Route::get('/shoppingCart/delete/{id}', 'ProductController@deleteCart')->name('deleteCart');