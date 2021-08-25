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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/p/create','PostsController@create');
Route::get('/p/{post}','PostsController@show');
Route::post('/p','PostsController@store');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show'); 
