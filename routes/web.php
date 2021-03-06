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

Auth::routes();

Route::get('/', function() {
    return view('home');
});

Route::get('/home', 'HomeController@index');

Route::prefix('admin/posts')
    ->middleware('auth')
    ->name('posts.')
    ->group(function () {
        Route::get('/', 'PostController@index')->name('index');
        Route::get('/{id}', 'PostController@show')->name('show');
});