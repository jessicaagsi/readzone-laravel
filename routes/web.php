<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
 

Route::get('/', [BukuController::class, 'index'])->name('index');
Route::get('/dashboard', [BukuController::class, 'dashboard'])->name('dashboard');
Route::get('/buku', [BukuController::class, 'buku'])->name('buku');
Route::get('/buku/tambah', [BukuController::class, 'tambah_buku'])->name('tambah_buku');
Route::post('/buku/insert', [BukuController::class, 'insert_buku'])->name('insert_buku');
Route::get('/buku/delete/{id}', [BukuController::class, 'delete'])->name('delete');
Route::get('/cetak', [BukuController::class, 'cetak'])->name('cetak');

