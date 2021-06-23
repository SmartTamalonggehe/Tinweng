<?php

use App\Http\Controllers\Admin\AturanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\NilaiKriteriaController;
use App\Http\Controllers\Admin\PerhitunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('admin');

Route::resource('kriteria', KriteriaController::class);
Route::resource('nilaiKriteria', NilaiKriteriaController::class);
// Perhitungan
Route::get('hitungVariabel', [PerhitunganController::class, 'index'])->name('hitungVariabel');
Route::resource('aturan', AturanController::class);
