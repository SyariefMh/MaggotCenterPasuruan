<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'indexs']);

Route::get('/detailProduk', function () {
    return view('detailProduk');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/cekProduk', [HomeController::class, 'index'])->name('cek');
Route::get('/cek/{uid}', [HomeController::class, 'produkHome'])->name('produk.show');


Route::get('/produk/{id}', [HomeController::class, 'show'])->name('produk');

Route::get('detail-produk/{id}', [HomeController::class, 'show'])->name('detailProduk');


