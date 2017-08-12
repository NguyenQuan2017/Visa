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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',['as'=>'dashboard','uses'=>'Admin\DashboardController@dashboard']);
Route::get('/add',['as'=>'add','uses'=>'Admin\DashboardController@getCard']);
Route::post('/add',['as'=>'postadd','uses'=>'Admin\DashboardController@postCard']);
Route::get('/edit/{id}',['as'=>'edit','uses'=>'Admin\DashboardController@getEditCard']);
Route::post('/edit',['as'=>'post-edit','uses'=>'Admin\DashboardController@postEditCard']);
Route::get('/delete/{id}',['as'=>'delete','uses'=>'Admin\DashboardController@delete']);