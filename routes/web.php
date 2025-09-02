<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfilController;


Route::get('/', [LoginController::class, 'showLogin'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfilController::class, 'index'])->name('profile');
    Route::resource('rumah_sakit', RumahSakitController::class)->names([
        'index'   => 'rumahsakit.index',
        'create'  => 'rumahsakit.create',
        'store'   => 'rumahsakit.store',
        'show'    => 'rumahsakit.show',
        'edit'    => 'rumahsakit.edit',
        'update'  => 'rumahsakit.update',
        'destroy' => 'rumahsakit.destroy',
    ]);
    Route::resource('pasien', PasienController::class)->names([
        'index'   => 'pasien.index',
        'create'  => 'pasien.create',
        'store'   => 'pasien.store',
        'show'    => 'pasien.show',
        'edit'    => 'pasien.edit',
        'update'  => 'pasien.update',
        'destroy' => 'pasien.destroy',
    ]);
});


