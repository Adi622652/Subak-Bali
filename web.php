<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSubakController;
use App\Http\Controllers\AdminUserController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/data-subak', [SubakController::class, 'index'])->name('subak.index');
Route::get('/data-subak/{slug}', [SubakController::class, 'show'])->name('subak.show');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [PageController::class, 'sendContact'])->name('contact.send');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/

Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Subak Management
    Route::get('/subak', [AdminSubakController::class, 'index'])->name('subak.index');
    Route::get('/subak/create', [AdminSubakController::class, 'create'])->name('subak.create');
    Route::post('/subak', [AdminSubakController::class, 'store'])->name('subak.store');
    Route::get('/subak/{id}/edit', [AdminSubakController::class, 'edit'])->name('subak.edit');
    Route::put('/subak/{id}', [AdminSubakController::class, 'update'])->name('subak.update');
    Route::delete('/subak/{id}', [AdminSubakController::class, 'destroy'])->name('subak.destroy');
    
    // User Management (Superadmin only)
    Route::middleware(['auth'])->group(function () {
        Route::get('/pengguna', [AdminUserController::class, 'index'])->name('pengguna.index');
        Route::get('/pengguna/create', [AdminUserController::class, 'create'])->name('pengguna.create');
        Route::post('/pengguna', [AdminUserController::class, 'store'])->name('pengguna.store');
        Route::delete('/pengguna/{id}', [AdminUserController::class, 'destroy'])->name('pengguna.destroy');
    });
});
