<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/kayit','HomeController@createView')->name('register.view');
Route::get('/', 'LoginController@LoginView');
Route::post('/giris', 'LoginController@login')->name('login');


//%98 bunu kullanıcaz
Route::get('/admin', 'AdminController@index');
Route::get('/merhaba','HomeController@merhaba');

Route::post('/kaydet','HomeController@create');
Route::get('/index', 'HomeController@list');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id'=>'[0-9]+')); // sil/aa yapınca not foun yazar sayı dışındakiler için çalışmasını engelliyor
Route::post('/guncelle/{id}', 'HomeController@update');
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id'=>'[0-9]+'));

Route::get('/user-import','ExcelUploadController@userImportView')->name('user.upload');
Route::post('/user-import-post','ExcelUploadController@userImport')->name('user.import');
Route::get('/indir','ExcelDownloadController@userDownload')->name('user.download');

Route::get('/urun-ekle','ProductController@productCreateView')->name('product.add');
Route::post('/urun-kaydet', 'ProductController@productCreate')->name('product.create');

Route::get('/index-product', 'ProductController@indexProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
