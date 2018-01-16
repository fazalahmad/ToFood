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
    return view('admin.menu.edit_menu');
});

Route::get('/petugas', 'Manual\Controller_Anggota@list_anggota');
Route::get('/add_anggota', 'Manual\Controller_Anggota@add_anggota');
Route::post('/add_anggota', 'Manual\Controller_Anggota@anggota_post');

Route::get('/menu', 'Manual\Controller_Menu@list_menu');
Route::get('/add_menu','Manual\Controller_Menu@menu');
Route::post('/add_menu', 'Manual\Controller_Menu@menu_post');
Route::get('/edit_menu/{id_menu}', 'Manual\Controller_Menu@edit');
Route::post('/edit_menu/{id_menu}', 'Manual\Controller_Menu@update');
Route::get('/delete_menu/{id_menu}', 'Manual\Controller_Menu@delete');
// Route::post('/edit_menu/{id_menu}');
