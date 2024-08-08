<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homeScreen');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/detailProduk', function () {
    return view('detailProduk');
});

Route::get('/media', function () {
    return view('media');
});
