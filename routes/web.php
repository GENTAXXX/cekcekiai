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
    return view('cekongkir');
});

Route::get('/ongkir', 'CekOngkirController@index')->name('ongkir');
Route::get('/resi', 'CekResiController@index')->name('resi');