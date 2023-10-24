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



Auth::routes();
Route::get('profile', 'HomeController@profile')->name('profile');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');




Route::get('category/create', 'CategoryController@create')->name('create');
Route::post('category/create', 'CategoryController@store')->name('store');
Route::get('category/{id}/edit', 'CategoryController@edit')->name('edit');
Route::post('category/{id}/edit', 'CategoryController@update')->name('update');

Route::get('category', 'CategoryController@index')->name('index');


Route::get('product/home', 'ProductController@index')->name('index');


Route::get('product/{id}/add-cart', 'ProductController@add')->name('add');
Route::get('product/cart', 'ProductController@show')->name('show');
Route::get('cart/{id}/delete', 'CategoryController@destory')->name('destory');
Route::get('product/cart/clear', 'CategoryController@removeCart')->name('removeCart');




Route::get('/home', 'HomeController@index')->name('home');
Route::group(array('prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'manager'), function () {
    Route::get('users', 'UserController@index')->name('index');
    Route::get('users/{id}/edit', 'UserController@edit')->name('edit');
    Route::post('users/{id}/edit', 'UserController@update')->name('update');
    Route::get('/', 'UserController@showAdmin')->name('showAdmin');

    Route::get('roles/', 'RoleController@index')->name('index');
    Route::get('roles/create', 'RoleController@create')->name('create');
    Route::post('roles/create', 'RoleController@store')->name('store');


    Route::get('products/', 'ProductController@index')->name('index');
    Route::get('products/create', 'ProductController@create')->name('create');
    Route::post('products/create', 'ProductController@store')->name('store');
    Route::get('products/{id}/edit', 'ProductController@edit')->name('edit');
    Route::post('products/{id}/edit', 'ProductController@update')->name('update');
    Route::get('products/{id}/delete', 'ProductController@destroy')->name('destroy');



    Route::get('category/create', 'HomeController@create')->name('create');
    Route::post('category/create', 'HomeController@store')->name('store');
    Route::get('/category', 'HomeController@showCategory')->name('showCategory');
});
