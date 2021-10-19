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

Route::get('/service', 'PagesController@service');
Route::get('/home', 'PagesController@home');
Route::get('/apropos', 'PagesController@apropos');
Route::get('/show/{id}', 'PagesController@show');
Route::get('/creer','PagesController@creer');
Route::get('/saveproduct','PagesController@create');
