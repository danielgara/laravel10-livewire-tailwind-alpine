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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/products', 'App\Http\Controllers\ProductsController@index')->name('products.index');
Route::get('/products/search', 'App\Http\Controllers\ProductsController@search')->name('products.search');
