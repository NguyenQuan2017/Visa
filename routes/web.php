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


Route::get('/login',['as'=>'login','uses'=>'Admin\DashboardController@login']);
Route::post('/login',['as'=>'post-login','uses'=>'Admin\DashboardController@postLogin']);


Route::group(['middleware'=>'authlogin'],function(){

Route::get('logout',['as'=>'logout','uses'=>'Admin\DashboardController@logout']);

Route::get('/',['as'=>'dashboard','uses'=>'Admin\DashboardController@dashboard']);
Route::get('/add',['as'=>'add','uses'=>'Admin\DashboardController@getCard']);
Route::post('/add',['as'=>'postadd','uses'=>'Admin\DashboardController@postCard']);
Route::get('/edit/{id}',['as'=>'edit','uses'=>'Admin\DashboardController@getEditCard']);
Route::post('/edit',['as'=>'post-edit','uses'=>'Admin\DashboardController@postEditCard']);
Route::get('/delete/{id}',['as'=>'delete','uses'=>'Admin\DashboardController@delete']);

//Services
Route::get('/service/list',['as'=>'service-list','uses'=>'Admin\DashboardController@getListService']);
Route::get('/service/edit/{id}',['as'=>'service-edit','uses'=>'Admin\DashboardController@getEditService']);
Route::post('/service/edit',['as'=>'post-service-edit','uses'=>'Admin\DashboardController@postEditService']);
Route::get('service/delete/{id}',['as'=>'delete-service','uses'=>'Admin\DashboardController@deleteService']);
});
