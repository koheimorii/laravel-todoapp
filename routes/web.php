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

Route::get('todo', 'ToDoController@index');

Route::post('todo', 'ToDoController@create');
Route::get('todo/delete', 'ToDoController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
