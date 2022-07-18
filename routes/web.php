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

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/', 'HelloController@index')->name('/hello');
Route::post('hello/', 'HelloController@post');
Route::get('hello/add', 'HelloController@add')->name('hello/add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/show/{id}', 'HelloController@show')->name('hello/show');
Route::get('hello/edit/{id}', 'HelloController@edit')->name('hello/edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del{id}', 'HelloController@del')->name('hello/del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/rest', 'HelloController@rest')->name('hello/rest');
Route::get('hello/session', 'HelloController@ses_get')->name('session');
Route::post('hello/session', 'HelloController@ses_put')->name('session/put');

Route::get('person', 'PersonController@index')->name('person');
Route::get('person/find', 'PersonController@find')->name('person/find');
Route::post('person/find', 'PersonController@search')->name('person/search');
Route::get('person/add', 'PersonController@add')->name('person/add');
Route::post('person/add', 'PersonController@create')->name('person/create');
Route::get('person/edit/{id}', 'PersonController@edit')->name('person/edit');
Route::post('person/edit', 'PersonController@update')->name('person/update');
Route::get('person/delete/{id}', 'PersonController@delete')->name('person/delete');
Route::post('person/delete', 'PersonController@destroy')->name('person/destroy');

Route::get('board/', 'BoardController@index')->name('board');
Route::get('board/add', 'BoardController@add')->name('board/add');
Route::post('board/add', 'BoardController@create')->name('board/create');

Route::resource('rest', 'RestappController');


