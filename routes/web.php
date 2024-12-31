<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\tb_kab_kotaController;
use App\Http\Controllers\Admin\profilController;

// Rute untuk halaman dashboard admin
Route::get('/', function () {
    return redirect()->route('admin.dashboard'); // Redirect ke dashboard
});

// Rute untuk Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Rute untuk Kabupaten/Kota
    Route::prefix('tb_kab_kota')->group(function () {
        Route::get('/', [tb_kab_kotaController::class, 'index'])->name('admin.tb_kab_kota.index');
        Route::get('/create', [tb_kab_kotaController::class, 'create'])->name('admin.tb_kab_kota.create');
        Route::post('/', [tb_kab_kotaController::class, 'store'])->name('admin.tb_kab_kota.store');
        Route::get('/{id}', [tb_kab_kotaController::class, 'detail'])->name('admin.tb_kab_kota.detail');
        Route::get('/{id}/edit', [tb_kab_kotaController::class, 'edit'])->name('admin.tb_kab_kota.edit');
        Route::put('/{id}', [tb_kab_kotaController::class, 'update'])->name('admin.tb_kab_kota.update');
        Route::delete('/{id}', [tb_kab_kotaController::class, 'delete'])->name('admin.tb_kab_kota.delete');
    });

    // Rute untuk halaman profil admin
    Route::get('/profile', [profilController::class, 'show'])->name('admin.profile');
    // Rute untuk halaman edit profil admin
    Route::get('/admin/profile/edit', [profilController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/admin/profile', [profilController::class, 'update'])->name('admin.profile.update');
});