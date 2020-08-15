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

Route::get('/', 'TeacherController@index')->name('home');
Route::get('/create', 'TeacherController@create')->name('create');
//Insert data and name the field of create.blade.php and  in action,method set the route and method
Route::post('/create', 'TeacherController@store')->name('store');

Route::get('/edit/{id}', 'TeacherController@edit')->name('edit');
Route::post('/update/{id}', 'TeacherController@update')->name('update');
Route::delete('/delete/{id}', 'TeacherController@delete')->name('delete');