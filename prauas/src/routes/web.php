<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Untuk super_admin
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin']);
});

// Untuk bendahara
Route::middleware(['auth', 'role:bendahara'])->group(function () {
    Route::get('/bendahara/data-iuran', [IuranController::class, 'index']);
});

// Untuk ketua
Route::middleware(['auth', 'role:ketua'])->group(function () {
    Route::get('/ketua/laporan', [LaporanController::class, 'index']);
});

// Untuk warga
Route::middleware(['auth', 'role:warga'])->group(function () {
    Route::get('/warga/tagihan', [TagihanController::class, 'index']);
});
