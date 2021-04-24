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

//============Admin============
Route::get('loginadmin','LoginController@loginadmin');
Route::post('loginadminPost', 'LoginController@loginAdminPost');
Route::get('logoutadmin', 'LoginController@logoutAdmin');
Route::get('dashboard','AdminController@dashboard');
Route::get('admin','AdminController@admin');
Route::post('addAdmin','AdminController@create');
Route::put('editAdmin/{id}','AdminController@update');

//===================================
Route::get('dashboardanggota','AnggotaController@dashboardanggota');
Route::get('loginanggota','LoginController@loginanggota');
Route::get('logoutanggota', 'LoginController@logoutAnggota');
Route::post('loginAnggotaPost', 'LoginController@loginAnggotaPost');
Route::get('register','LoginController@register');
Route::post('registerAnggotaPost','LoginController@registerAnggotaPost');

//===================Acara==============
Route::get('acara','AcaraController@acara');
Route::post('addAcara','AcaraController@create');
Route::put('editAcara/{id}','AcaraController@update');
Route::delete('deleteAcara/{id}','AcaraController@delete');