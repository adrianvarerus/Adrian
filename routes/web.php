<?php

use App\Http\Controllers\PengambilanTandanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function(){
    return view('home.index');
});

// Admin DASHBOARD
Route::prefix('/admin')->group(function() {
    Route::get('/dashboard', function(){
        $data = [
            'content'  =>  '/admin/dashboard/index'
        ];
        return view('admin.index', $data);
    })->name('admin');
    Route::resource('/PT', PengambilanTandanController::class);
});

// Route untuk menampilkan halaman Register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Route untuk menampilkan halaman Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');