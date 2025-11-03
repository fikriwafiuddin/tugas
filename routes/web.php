<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/tampil-produk', [ProdukController::class, 'index']);
    Route::get('/tambah-produk', [ProdukController::class, 'store'])->name('produk.create');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/tampil-kategori', [KategoriController::class, 'index']);
    Route::get('/tambah-kategori', [KategoriController::class, 'store'])->name('kategori.create');
});

Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth', 'kasir');