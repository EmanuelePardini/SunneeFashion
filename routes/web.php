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
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{id}', 'OrderController@show')->name('orders.show');
Route::get('/orders/{id}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('/orders/{id}', 'OrderController@update')->name('orders.update');
Route::delete('/orders/{id}', 'OrderController@destroy')->name('orders.destroy');
Route::get('/orders/byDateRange/{startDate}/{endDate}', 'OrderController@showByDateRange')->name('orders.showByDateRange');
Route::get('/orders/byProduct/{productId}', 'OrderController@showByProduct')->name('orders.showByProduct');

//Products
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::get('/totalRecycledPlastic', 'ProductController@totalRecycledPlastic')->name('products.totalRecycledPlastic');
