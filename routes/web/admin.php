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
Route::namespace('Admin')->group(function (){
Route::get('/','AdminController@index')->name('admin.dashboard');
Route::post('/dash','AdminController@dash')->name('admin.dash');

});
Route::namespace('Admin\Menu')->group(function (){
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('category', 'CategoryController');
});
//Route::get('/',)



