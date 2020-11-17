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
    return view('components.body');
});

//ini routing untuk pindah halaman. '/pindahHalaman disesuaikan dengan link pada komponen'
//<a> pada view
Route::post('/addwish', 'ControllerHalaman@addwish');
Route::post('/insertBaru', 'ControllerHalaman@prosesData');
Route::post('/insertBaru2', 'ControllerHalaman@prosesData2');
Route::post('/isivoucher', 'ControllerHalaman@isivoucher');
Route::get('/tambahkupon','ControllerHalaman@tambahkupon');
Route::get('/Login', function () {
    return view('components.body2');
});
Route::get('/Register', function () {
    return view('components.Register');
});
Route::get('/Admin', function () {
    return view('components.admin');
});
Route::get('/product', function () {
    return view('components.product');
});
Route::get('/detailproduct', function () {
    return view('components.detailproduct');
});
Route::get('/aboutus', function () {
    return view('components.aboutus');
});

Route::get('/detail', 'ControllerHalaman@detail');
Route::get('/profiluser', 'ControllerHalaman@profiluser');
Route::get('/detailpenginapan', 'ControllerHalaman@detailpenginapan');
Route::get('/ceklogin', 'ControllerHalaman@login');
Route::get('/topup', 'ControllerHalaman@TopUp');
Route::post('/delete','ControllerHalaman@deleteSession');

