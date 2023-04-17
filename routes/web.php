<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SellerController;
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


Route::group(['prefix' => '/'], function(){
    Route::get('/', [ClientController::class, 'index'])->name('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'home/admin', 'middleware'=>'can:isAdmin'], function(){
    Route::get('/seller', [AdminController::class, 'seller']);
});

Route::group(['prefix' => 'home/seller', 'middleware' => 'can:isSeller'], function(){
    Route::get('/jual', [SellerController::class, 'seller'])->name('jual');
    Route::get('/jual/tambah_produk', [SellerController::class, 'tambah_produk'])->name('tambah_produk');
    Route::post('/jual/tambah_produk/upload_produk', [SellerController::class, 'upload_produk'])->name('upload_produk');
});