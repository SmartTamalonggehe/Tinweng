<?php

use App\Http\Controllers\Admin\AturanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HasilController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\NilaiKriteriaController;
use App\Http\Controllers\Admin\PemakaiController;
use App\Http\Controllers\Admin\PerhitunganController;
use App\Http\Controllers\Admin\NilaiPemakaiController;
use App\Http\Controllers\Admin\ShowHasilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('admin');

Route::resource('kriteria', KriteriaController::class);
Route::resource('nilaiKriteria', NilaiKriteriaController::class);
// Perhitungan
Route::get('hitungVariabel', [PerhitunganController::class, 'index'])->name('hitungVariabel');
Route::resource('aturan', AturanController::class);
Route::resource('pemakai', PemakaiController::class);
Route::resource('nilaiPemakai', NilaiPemakaiController::class);
Route::resource('hasil', HasilController::class);

Route::get('showHasil', [ShowHasilController::class, 'index'])->name('showHasil');
