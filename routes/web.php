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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'App\Http\Controllers\PageController@index');


Route::get('/create', 'App\Http\Controllers\PageController@create');
Route::post('/', 'App\Http\Controllers\PageController@store');

Route::get('/home/{id}', 'App\Http\Controllers\PageController@show');

Route::get('/home/{id}/edit', 'App\Http\Controllers\PageController@edit');
Route::put('/home/{id}', 'App\Http\Controllers\PageController@update');

Route::delete('/home/{id}', 'App\Http\Controllers\PageController@destroy');
