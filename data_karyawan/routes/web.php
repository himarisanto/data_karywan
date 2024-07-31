<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Manager Routes
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager/data-karyawan', [ManagerController::class, 'dataKaryawan'])->name('manager.dataKaryawan');
    Route::get('/manager/catatan-karyawan', [ManagerController::class, 'catatanKaryawan'])->name('manager.catatanKaryawan');
    Route::get('/manager/follow-up-hrd', [ManagerController::class, 'followUpHrd'])->name('manager.followUpHrd');
    Route::get('/manager/absensi-karyawan', [ManagerController::class, 'absensiKaryawan'])->name('manager.absensiKaryawan');
    Route::get('/manager/golongan', [ManagerController::class, 'golongan'])->name('manager.golongan');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/impor-absensi', [AdminController::class, 'imporAbsensi'])->name('admin.imporAbsensi');
    Route::get('/admin/input-data-karyawan', [AdminController::class, 'inputDataKaryawan'])->name('admin.inputDataKaryawan');
    Route::post('/admin/input-data-karyawan', [AdminController::class, 'storeDataKaryawan'])->name('admin.storeDataKaryawan');
});

// User Routes
Route::middleware('auth')->group(function () {
    Route::get('/user/profil-saya', [UserController::class, 'profilSaya'])->name('user.profilSaya');
    Route::get('/user/absensi-saya', [UserController::class, 'absensiSaya'])->name('user.absensiSaya');
    Route::get('/user/edit-profil', [UserController::class, 'editProfil'])->name('user.editProfil');
    Route::post('/user/edit-profil', [UserController::class, 'updateProfil'])->name('user.updateProfil');
    Route::get('/user/status-kerja', [UserController::class, 'statusKerja'])->name('user.statusKerja');
});
