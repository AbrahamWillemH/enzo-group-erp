<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\SeminarKitController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\AllOrder;

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
    // update progress
    Route::post('/orders/invitation/{id}/update-progress', [InvitationController::class, 'updateProgress'])->name('orders.invitation.updateProgress');
    Route::post('/orders/souvenir/{id}/update-progress', [SouvenirController::class, 'updateProgress'])->name('orders.souvenir.updateProgress');
    Route::post('/orders/seminarkit/{id}/update-progress', [SeminarKitController::class, 'updateProgress'])->name('orders.seminarkit.updateProgress');
    Route::post('/orders/packaging/{id}/update-progress', [PackagingController::class, 'updateProgress'])->name('orders.packaging.updateProgress');
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    // create order
    Route::get('/orders/invitation/create', [InvitationController::class, 'create'])->name('user.orders.invitation.create');
    Route::post('/orders/invitation', [InvitationController::class, 'store'])->name('user.orders.invitation.store');
    Route::get('/orders/souvenir/create', [SouvenirController::class, 'create'])->name('user.orders.souvenir.create');
    Route::post('/orders/souvenir', [SouvenirController::class, 'store'])->name('user.orders.souvenir.store');
    Route::get('/orders/seminarkit/create', [SeminarKitController::class, 'create'])->name('user.orders.seminarkit.create');
    Route::post('/orders/seminarkit', [SeminarKitController::class, 'store'])->name('user.orders.seminarkit.store');
    Route::get('/orders/packaging/create', [PackagingController::class, 'create'])->name('user.orders.packaging.create');
    Route::post('/orders/packaging', [PackagingController::class, 'store'])->name('user.orders.packaging.store');
});
