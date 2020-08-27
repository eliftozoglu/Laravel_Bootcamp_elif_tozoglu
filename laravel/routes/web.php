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
 //%2 bunu kullanıcaz
Route::get('/', function () {
    return view('welcome');
});

//%98 bunu kullanıcaz

Route::get('/merhaba','HomeController@merhaba');
Route::get('/kayit','Homecontroller@createView');
Route::post('/kaydet','Homecontroller@create');
Route::get('/index', 'HomeController@list');




