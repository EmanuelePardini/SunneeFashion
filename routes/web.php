<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');


//Orders
Route::get('/orders', 'App\Http\Controllers\OrderController@index')->name('orders.index');
Route::get('/orders/create', 'App\Http\Controllers\OrderController@create')->name('orders.create');
Route::post('/orders', 'App\Http\Controllers\OrderController@store')->name('orders.store');
Route::get('/orders/{id}', 'App\Http\Controllers\OrderController@show')->name('orders.show');
Route::get('/orders/{id}/edit', 'App\Http\Controllers\OrderController@edit')->name('orders.edit');
Route::put('/orders/{id}', 'App\Http\Controllers\OrderController@update')->name('orders.update');
Route::delete('/orders/{id}', 'App\Http\Controllers\OrderController@destroy')->name('orders.destroy');
Route::get('/orders/byDateRange/{startDate}/{endDate}', 'App\Http\Controllers\OrderController@showByDateRange')->name('orders.showByDateRange');
Route::get('/orders/byProduct/{productId}', 'App\Http\Controllers\OrderController@showByProduct')->name('orders.showByProduct');

//Products
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('/products', 'App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');
Route::get('/products/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::put('/products/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
Route::get('/totalRecycledPlastic', 'App\Http\Controllers\ProductController@totalRecycledPlastic')->name('products.totalRecycledPlastic');
