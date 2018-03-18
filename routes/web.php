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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('keren.master');
});
Route::resource('user','KontakController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::resource('barang','BarangController');
Route::get('user','BarangController@aa');
Route::resource('pembeli','PembeliController');

Route::group(['middleware'=>'cors'],function(){
	Route::get('/listdata','ApiController@listdata');
});




