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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/plant/show/{id}', 'PlantController@show')->name('plant.show');
Route::get('/plant/buy/{id}', 'PlantController@buy')->name('plant.buy');
Route::get('/plant/category/{id}', 'PlantController@category')->name('plant.category');
Route::get('/news', 'HomeController@news')->name('news.list');
Route::get('/about', 'HomeController@about')->name('about');
