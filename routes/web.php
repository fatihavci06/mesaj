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

Route::post('admin/giris','App\Http\Controllers\Auths@loginpost')->name('admin.login.post');

Route::get('/','App\Http\Controllers\Auths@login')->name('admin.login');
Route::get('admin/cikis','App\Http\Controllers\Auths@logout')->name('admin.logout');
Route::get('/admin','App\Http\Controllers\Homepages@index')->middleware('buadminmi')->name('admin.dashboard'); 
Route::get('/table','App\Http\Controllers\Homepages@table')->middleware('buadminmi')->name('admin.table'); 
Route::post('message/post/{id}','App\Http\Controllers\MessageController@savemassage')->name('message.post'); 