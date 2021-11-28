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
Route::get('/', 'App\Http\Controllers\CsController@index');
Route::get('/index', 'App\Http\Controllers\CsController@index');
Route::get('/create',   'App\Http\Controllers\CsController@create');
Route::post('/store',   'App\Http\Controllers\CsController@store');
Route::get('/test',   'App\Http\Controllers\CsController@test');
