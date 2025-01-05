<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('backend.login');
});
Route::get('backend/beranda',[BerandaController::class, 'berandaBackend'])
->name('backend.beranda')->middleware('auth');

Route::get('backend/login',[LoginController::class, 'loginBackend'])
->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])
->name('backend.login');
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])
->name('backend.logout');

// Route untuk User
// Route::resource('backend/user', UserController::class)->middleware('auth');
Route::resource('backend/user', UserController::class, ['as' => 'backend'])
->middleware('auth');
// Route untuk laporan user
Route::get('backend/laporan/formuser', [UserController::class, 'formUser'])
->name('backend.laporan.formuser')->middleware('auth');
Route::post('backend/laporan/cetakuser', [UserController::class, 'cetakUser'])
->name('backend.laporan.cetakuser')->middleware('auth');

// Route untuk Kategori
Route::resource('backend/kategori', KategoriController::class, ['as' => 'backend'])
->middleware('auth'); 

// Route untuk Produk
Route::resource('backend/produk', ProdukController::class, ['as' => 'backend'])
->middleware('auth');
// Route untuk menambahkan foto
Route::post('foto-produk/store', [ProdukController::class, 'storeFoto'])
->name('backend.foto_produk.store')->middleware('auth');
// Route untuk menghapus foto
Route::delete('foto-produk/{id}', [ProdukController::class, 'destroyFoto'])
->name('backend.foto_produk.destroy')->middleware('auth');
// Route untuk laporan produk
Route::get('backend/laporan/formproduk', [ProdukController::class, 'formProduk'])
->name('backend.laporan.formproduk')->middleware('auth');
Route::post('backend/laporan/cetakproduk', [ProdukController::class, 'cetakProduk'])
->name('backend.laporan.cetakproduk')->middleware('auth');