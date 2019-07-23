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
//frontend route
Route::resource('/', 'HomeController');


Route::get('/details', 'ProductdetailsController@index');

//backend route
Route::get('/admin', 'DashboardController@index');
Route::resource('admin/order', 'OrderController');
Route::resource('admin/product', 'ProductController');
Route::resource('admin/brand', 'BrandController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/customer', 'CustomerController');
Route::resource('admin/country', 'CountryController');
