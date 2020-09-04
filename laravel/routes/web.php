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
Route::get('/admin', 'AdminController@index');
Route::get('/merhaba','HomeController@merhaba');
Route::get('/kayit','HomeController@createView');
Route::post('/kaydet','HomeController@create');
Route::get('/index', 'HomeController@list');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id'=>'[0-9]+')); // sil/aa yapınca not foun yazar sayı dışındakiler için çalışmasını engelliyor
Route::post('/guncelle/{id}', 'HomeController@update');
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id'=>'[0-9]+'));


