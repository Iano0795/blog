<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('App\Http\Controllers')->group(function (){
    Route::get('/about', 'pageController@about');
    Route::get('/contact', 'pageController@contact');
    Route::get('/grid-system', 'pageController@gridSystem');
    Route::get('/blog', 'pageController@blog');
    Route::get('/index', 'pageController@index');
    Route::get('/base', 'pageController@base');
});
