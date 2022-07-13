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

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/', 'HelloController@index')->name('/hello');
Route::post('hello/', 'HelloController@post');
Route::get('hello/add', 'HelloController@add')->name('hello/add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/show', 'HelloController@show')->name('hello/show');
Route::get('hello/edit', 'HelloController@edit')->name('hello/edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del')->name('hello/del');
Route::post('hello/del', 'HelloController@remove');
