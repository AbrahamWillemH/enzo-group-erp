<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function(){
    return view('welcome');
});

// Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Login and Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/orders/approve/{id}', [AdminController::class, 'approveOrder'])->name('orders.approve');
    Route::post('/admin/orders/decline/{id}', [AdminController::class, 'declineOrder'])->name('orders.decline');
    Route::post('/orders/{id}/update-progress', [OrderController::class, 'updateProgress'])->name('orders.updateProgress');
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('user.orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('user.orders.store');
});
