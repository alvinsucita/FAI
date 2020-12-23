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
// Route::get('/Admin', function () {
//     return view('components.admin');
// });
// Route::get('/product', function () {
//     return view('components.product');
// });
Route::get('/product', 'ProductController@index');
Route::post('/product/filter', 'ProductController@filter');
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

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@home');
    Route::get('/login', 'AdminController@log');
    Route::post('/login', 'AdminController@login');
    Route::post('/logout', 'AdminController@logout');

    Route::group(['prefix' => 'barang'], function() {
        Route::get('/', 'AdminController@allbarang');
        Route::get('/{id}', 'AdminController@detail');
        Route::post('/insert', 'AdminController@insert');
        Route::post('/update/{id}', 'AdminController@update');
        Route::get('/delete/{id}', 'AdminController@delete');
    });

    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'AdminController@alluser');
        Route::get('/{id}', 'AdminController@detailuser');
    });

    Route::group(['prefix' => 'trans'], function() {
        Route::get('/', 'AdminController@alltrans');
        Route::get('/{id}', 'AdminController@detailtrans');
    });
});

Route::get('/logout', 'UserController@logout');
Route::group(['middleware' => 'login-user'], function() {
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'UserController@home');
        Route::get('/pass_change', 'UserController@pass_change');
        Route::post('/change_p', 'UserController@change_p');
        Route::get('/edit_profile', 'UserController@profile');
        Route::post('/edit_prof', 'UserController@edit_prof');
        Route::get('/cart', 'UserController@cart');
        Route::get('/buy_item', 'UserController@buy_form');
        // Route::get('/', 'UserController@home');
        Route::get('/aboutus', 'UserController@aboutus');
        Route::get('/dummy1', 'UserController@cart_dummy1');
        Route::get('/dummy2', 'UserController@cart_dummy2');
        Route::get('/dummy3', 'UserController@cart_dummy3');
        Route::get('/dummy1plus', 'UserController@cart_dummy1plus');
        Route::get('/dummy1minus', 'UserController@cart_dummy1minus');
        Route::get('/cart_erase', 'UserController@cart_erase');
        Route::get('/cart_erase_id2', 'UserController@cart_erasespecific2');
    });
});
