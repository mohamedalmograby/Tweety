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

Auth::routes();


Route::get('/tweets' , 'TweetsController@index')->middleware('auth')->name('home') ; 
Route::post('/tweets' , 'TweetsController@store')->middleware('auth') ; 

Route::get('/profiles/{user}' , 'ProfilesController@show')->name('profile')->middleware('auth');
Route::post('/profiles/{user}/follow' , "FollowsController@store")->middleware('auth') ; 
Route::post('/profiles/{user}/edit' , "ProfilesController@edit")->middleware('auth') ; 