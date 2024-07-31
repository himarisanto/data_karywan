<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/store', [LoginController::class, 'store'])->name('store.login');

// Halaman register
Route::get('register', function () {
    return view('autentikasi.register.index'); // Ganti dengan nama view Anda jika berbeda
})->name('register');

Route::post('register/store', [RegisterController::class, 'store'])->name('store.register');


// Employee routes
Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('{employee}', [EmployeeController::class, 'show'])->name('employees.show');
    Route::get('{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::put('{employee}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
});

// Manager routes
Route::prefix('manager')->group(function () {
    Route::get('employees', [ManagerController::class, 'index'])->name('manager.employees');
    Route::get('notes/{employee}', [ManagerController::class, 'showNotes'])->name('manager.notes');
    Route::get('follow-ups', [ManagerController::class, 'followUps'])->name('manager.followups');
    Route::get('attendance/{employee}', [ManagerController::class, 'showAttendance'])->name('manager.attendance');
    Route::get('grades', [ManagerController::class, 'grades'])->name('manager.grades');
});

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [UserController::class, 'showProfile'])->name('user.profile');
        Route::get('edit', [UserController::class, 'editProfile'])->name('user.edit');
        Route::put('/', [UserController::class, 'updateProfile'])->name('user.update');
    });

    Route::get('attendance', [UserController::class, 'showAttendance'])->name('user.attendance');
    Route::get('status', [UserController::class, 'showStatus'])->name('user.status');
    Route::get('violations', [UserController::class, 'showViolations'])->name('user.violations');
});

// Additional user routes
Route::prefix('user')->group(function () {
    Route::get('profile', [UserController::class, 'index'])->name('index.user');
    Route::post('store', [UserController::class, 'store'])->name('store.profile');
    Route::post('store', [UserController::class, 'kirim'])->name('kirim.user');
    Route::post('change/password', [UserController::class, 'gantiPassword'])->name('change.password');
});
