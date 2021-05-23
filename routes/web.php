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
Route::get('profilanggota','AnggotaController@profil');
Route::put('editAnggota/{id}','AnggotaController@update');

//===================Acara==============
Route::get('acara','AcaraController@acara');
Route::get('acara-anggota','AcaraController@acara_anggota');
Route::post('addAcara','AcaraController@create');
Route::put('editAcara/{id}','AcaraController@update');
Route::delete('deleteAcara/{id}','AcaraController@delete');

//===================Pengajuan==============
Route::get('pengajuan-admin','PengajuanController@pengajuan_admin');
Route::get('pengajuan-diterima','PengajuanController@pengajuan_diterima');
Route::get('pengajuan','PengajuanController@index');
Route::post('addPengajuan','PengajuanController@create');
Route::put('editPengajuan/{id}','PengajuanController@update');
Route::delete('deletePengajuan/{id}','PengajuanController@delete');

Route::get('galeri-admin','GaleriController@galeri_admin');
Route::post('addGaleri','GaleriController@create');
Route::put('editGaleri/{id}','GaleriController@update');
Route::delete('deleteGaleri/{id}','GaleriController@delete');