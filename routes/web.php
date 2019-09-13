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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/products', 'ProductController@index')->name('product_list');
    Route::get('/productsData', 'ProductController@getProductsData')->name('getProductsData');
    Route::get('/add_product', 'ProductController@add_product')->name('add_product');
    Route::post('/add_product', 'ProductController@store_product')->name('add_product');
    
    Route::get('delete_product/{id}', 'ProductController@delete_product')->name('delete_product');

    Route::get('edit_product/{id}', 'ProductController@edit_product')->name('edit_product');
    Route::post('update_product', 'ProductController@update_product')->name('update_product');
});


