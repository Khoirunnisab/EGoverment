<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemAduanController;

Route::get('/', [SistemAduanController::class, 'beranda']);
Route::get('/buat-aduan', [SistemAduanController::class, 'buatAduan']);
Route::post('/buat-aduan', [SistemAduanController::class, 'simpanAduan']);

Route::get('/cek-status', [SistemAduanController::class, 'cekStatus']);
Route::post('/cek-status', [SistemAduanController::class, 'cariStatus']);

Route::get('/tentang', [SistemAduanController::class, 'tentang']);
Route::get('/kontak', [SistemAduanController::class, 'kontak']);

Route::get('/aduan-sukses', function () {
    return view('aduan-sukses');
});
