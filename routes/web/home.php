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
//
//Route::get('/', function () {
//    return view('user.user');
//});
Route::get('/user_intro','HomeController@index')->name('user.intro');
Route::get('/user_register','HomeController@register')->name('user.register');
Route::get('/user_login','HomeController@login')->name('user.login');
Route::post('/user_create','HomeController@user_create')->name('user.user_create');
Route::get('/user_create','HomeController@user_create')->name('user.panel');
Route::get('/','HomeController@root')->name('home');

Route::prefix('profile')->namespace('Profile')->middleware('auth')->group(function (){
    Route::get('/','UserController@index')->name('user.profile');
    Route::get('/mails','UserController@mails')->name('user.mails');
    Route::post('/insert_user_comment','UserController@insert_user_comment') ;
    Route::post('/update_password','UserController@update_password') ;
    Route::get('/select_questionnaire','UserController@select_questionnaire')->name('user.questionnaire') ;
    Route::get('/income','UserController@income')->name('user.income') ;
    Route::get('/user_logout','UserController@logout')->name('user.logout') ;
    Route::get('/pro_questionnaire','UserController@pro_questionnaire')->name('user.pro_questionnaire') ;
    Route::post('/valid_questionnaire','RoleController@valid_questionnaire')->name('user.valid_questionnaire') ;
    Route::get('/shop','UserController@shop')->name('user.shop') ;
    Route::get('/product/{product}/show','UserController@product')->name('user.product') ;
    Route::post('/cart/add/{product}','CartController@add')->name('cart.add');
});


