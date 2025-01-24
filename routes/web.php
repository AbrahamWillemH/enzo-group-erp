<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\SeminarKitController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/pkg', function(){
    return view('admin.packaging_detail');
});

// bibi test inventory
// Route::get('/inventorytest', function(){
//     return view('frontend.inventorytest');  
// });
Route::get('/inventory/{jenis_inventory}', [InventoryController::class, 'index']);
Route::post('/inventory/rekap-stok/store', [InventoryController::class, 'storeRekapStok']);
Route::post('/inventory/rekap-stok/{kode_barang}/update', [InventoryController::class, 'updateRekapStok']);
Route::delete('/inventory/rekap-stok/{kode_barang}/delete', [InventoryController::class, 'deleteRekapStok']);
Route::post('/inventory/barang-masuk/store', [InventoryController::class, 'storeBarangMasuk']);
Route::put('/inventory/barang-masuk/{id}/update', [InventoryController::class, 'updateBarangMasuk']);
Route::delete('/inventory/barang-masuk/{id}/delete', [InventoryController::class, 'deleteBarangMasuk']);
Route::post('/inventory/barang-keluar/store', [InventoryController::class, 'storeBarangKeluar']);
Route::put('/inventory/barang-keluar/{id}/update', [InventoryController::class, 'updateBarangKeluar']);
Route::delete('/inventory/barang-keluar/{id}/delete', [InventoryController::class, 'deleteBarangKeluar']);

Route::get('/testedit', function(){
    return view('frontend.edit_test');
});

Route::get('/dataorder', function(){
    return view('frontend.data_order');
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
    Route::get('/admin/orders/invitation/detail/test', function(){return view('admin.invitation_detail_test');});

    //invitation
    Route::get('/admin/orders/invitation', [InvitationController::class, 'index'])->name('admin.invitation.view');
    Route::post('/admin/orders/invitation', [InvitationController::class, 'updatePaymentStatus'])->name('admin.invitation.update_payment_status');
    Route::get('/admin/orders/invitation/{id}', [InvitationController::class, 'invitationDetails'])->name('admin.invitation.detail');
    Route::get('/admin/orders/invitation/{id}/edit', [InvitationController::class, 'edit'])->name('admin.invitation.edit');
    Route::post('/admin/orders/invitation/{id}/update', [InvitationController::class, 'update'])->name('admin.invitation.update');

    //packaging
    Route::get('/admin/orders/packaging', [PackagingController::class, 'index'])->name('admin.packaging.view');
    Route::post('/admin/orders/packaging', [PackagingController::class, 'updatePaymentStatus'])->name('admin.packaging.update_payment_status');
    Route::get('/admin/orders/packaging/{id}', [PackagingController::class, 'packagingDetails'])->name('admin.packaging.detail');
    Route::get('/admin/orders/packaging/{id}/edit', [PackagingController::class, 'edit'])->name('admin.packaging.edit');
    Route::post('/admin/orders/packaging/{id}/update', [PackagingController::class, 'update'])->name('admin.packaging.update');

    //souvenir
    Route::get('/admin/orders/souvenir', [SouvenirController::class, 'index'])->name('admin.souvenir.view');
    Route::post('/admin/orders/souvenir', [SouvenirController::class, 'updatePaymentStatus'])->name('admin.souvenir.update_payment_status');
    Route::get('/admin/orders/souvenir/{id}', [SouvenirController::class, 'souvenirDetails'])->name('admin.souvenir.detail');
    Route::get('/admin/orders/souvenir/{id}/edit', [SouvenirController::class, 'edit'])->name('admin.souvenir.edit');
    Route::post('/admin/orders/souvenir/{id}/update', [SouvenirController::class, 'update'])->name('admin.souvenir.update');

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
    Route::get('/user/orders', [OrderController::class, 'orderIndex'])->name('orders.view');
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
