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
   // return view('welcome');
   return '<h1>Bonjour</h1>';
});
Route::get('/apropos/{nom}/{id}', function ($nom,$id) {
    // return view('welcome');
    return '<h1>mon nom est '.$nom.' et mon id est '.$id.'</h1>';
 });