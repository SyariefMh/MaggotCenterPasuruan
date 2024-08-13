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


Route::get('/produk', [HomeController::class, 'index'])->name('produk');
Route::get('/detail-produk/{uid}', [HomeController::class, 'produkHome'])->name('produk.show');


Route::get('/mediaAll', [HomeController::class, 'mediaAll'])->name('mediaAll');
Route::get('/media-detail/{uid}', [HomeController::class, 'media'])->name('media.detail');
