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







Route::get('cart', 'HomeController@cart');

Route::get('add-to-cart/{id}', 'HomeController@addToCart');

Route::patch('update-cart', 'HomeController@update');
 
Route::delete('remove-from-cart', 'HomeController@remove');

Route::get('checkout', 'CheckoutController@index');














Route::get('/details/{id}', 'ProductdetailsController@index');

//backend route
Route::get('/admin', 'DashboardController@index');
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/dashboard', 'DashboardController@show_dashboard');
Route::post('/admin-dashboard', 'DashboardController@dashboard');






Route::resource('admin/order', 'OrderController');
Route::resource('admin/product', 'ProductController');
Route::resource('admin/brand', 'BrandController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/customer', 'CustomerController');
Route::resource('admin/country', 'CountryController');
