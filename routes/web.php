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
    Route::get('/admin/orders', [AdminController::class, 'orderIndex'])->name('orders.view');
    Route::post('/admin/orders/detail/{id}', [OrderController::class, 'orderDetails'])->name('orders.detail');

    //invitation
    Route::post('/admin/orders/invitation/approve/{id}', [InvitationController::class, 'approveOrder'])->name('admin.orders.approve');
    Route::post('/admin/orders/invitation/decline/{id}', [InvitationController::class, 'declineOrder'])->name('admin.orders.decline');
    Route::get('/admin/orders/invitation/{id}', [InvitationController::class, 'invitationDetail'])->name('admin.invitation.detail');
    Route::get('admin/orders/invitation/edit', function(){return view('admin.invitation_edit');});

    //packaging
    Route::get('admin/orders/packaging/detail', function(){return view('admin.packaging_detail');});
    Route::get('admin/orders/packaging/edit', function(){return view('admin.packaging_edit');});

    //souvenir
    Route::get('admin/orders/souvenir', function(){return view('user.orders.souvenir_create');});
    Route::get('admin/orders/souvenir/detail', function(){return view('admin.souvenir_detail');});
    Route::get('admin/orders/souvenir/edit', function(){return view('admin.souvenir_edit');});

    // update progress
    Route::post('/admin/orders/{id}/update-progress', [OrderController::class, 'updateProgress'])->name('orders.updateProgress');
    Route::post('/admin/orders/{id}/previous-progress', [OrderController::class, 'previousProgress'])->name('orders.previousProgress');
    Route::get('/orders/packaging', function(){
        return view('user.orders.packaging_create');
    });

    //reminder
    Route::get('/admin/reminder', function(){return view('admin.reminder');});
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    // create order
    Route::get('/orders/invitation/create', [InvitationController::class, 'create'])->name('user.orders.invitation.create');
    Route::post('/orders/invitation/store', [InvitationController::class, 'store'])->name('user.orders.invitation.store');
    Route::get('/orders/souvenir/create', [SouvenirController::class, 'create'])->name('user.orders.souvenir.create');
    Route::post('/orders/souvenir/store', [SouvenirController::class, 'store'])->name('user.orders.souvenir.store');
    Route::get('/orders/seminarkit/create', [SeminarKitController::class, 'create'])->name('user.orders.seminarkit.create');
    Route::post('/orders/seminarkit/store', [SeminarKitController::class, 'store'])->name('user.orders.seminarkit.store');
    Route::get('/orders/packaging/create', [PackagingController::class, 'create'])->name('user.orders.packaging.create');
    Route::post('/orders/packaging/store', [PackagingController::class, 'store'])->name('user.orders.packaging.store');
});
