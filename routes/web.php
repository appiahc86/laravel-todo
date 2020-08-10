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




Route::get('/', 'TodosController@index')->name('home');
Route::get('/todos/{todo}', 'TodosController@show');
Route::get('/create-todo', 'TodosController@create');
Route::post('/store-todo', 'TodosController@store');
Route::get('/todo/{id}/edit', 'TodosController@edit');
Route::patch('/update-todo/{id}', 'TodosController@update');
Route::get('/todo/{id}/delete', 'TodosController@delete');
Route::get('/todo/{id}/complete', 'TodosController@complete');

Route::get('/test/{username}/{age}/{number}', 'TodosController@try');
