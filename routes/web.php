<?php

use App\Models\User;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PackagingController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\SeminarKitController;
use App\Http\Controllers\SouvenirSPKController;
use App\Http\Controllers\PackagingSPKController;
use App\Http\Controllers\InvitationSPKController;

Route::get('/', function(){
    return view('welcome');
});

// PUNYA HABIBI & HANA
Route::get('/pkg', function(){
    return view('admin.packaging_detail');
});

// bibi test inventory
// Route::get('/inventorytest', function(){
//     return view('frontend.inventorytest');
// });

Route::get('/cetak_packaging', function(){
    return view('admin.spk_packaging');
});
Route::get('/cetak_souvenir', function(){
    return view('admin.spk_souvenir');
});
Route::get('/cetak_invitation', function(){
    return view('admin.spk_invitation');
});

Route::get('/addadmin', function(){
    return view('frontend.create_admin');
});

Route::get('/editadmin', function(){
    return view('frontend.change_password');
});

Route::get('/tesdetail', function(){
    return view('frontend.detailundangan');
});

Route::get('/tesspk', function(){
    return view('frontend.spk');
});

Route::get('/tesspkcreate', function(){
    return view('frontend.spkcreate');
});

Route::get('/tesdetailpackaging', function(){
    return view('frontend.detailpackaging');
});

Route::get('/tesdetailsouvenir', function(){
    return view('admin.invitation_detail_test');
});

Route::get('/pesanansaya', function(){
    return view('frontend.pesanansaya');
});

Route::get('/pesanannew', function(){
    return view('frontend.newpesanan');
});

// Route::get('/user/order', function(){
//     return view('user.progress_order');
// });

Route::get('/testedit', function(){
    return view('frontend.edit_test');
});

Route::get('/dataorder', function(){
    return view('frontend.data_order');
});

Route::get('/calendar', function(){
    return view('frontend.calendar');
});

// PUNYA OPAL
Route::get('/inventory/{jenis_inventory}', [InventoryController::class, 'index'])->name('admin.inventory.view');
Route::post('/inventory/{{ rekap-stok/store }}', [InventoryController::class, 'storeRekapStok'])->name('admin.rekap.store');
Route::post('/inventory/rekap-stok/{kode_barang}/update', [InventoryController::class, 'updateRekapStok'])->name('admin.rekap.edit');
Route::delete('/inventory/rekap-stok/{kode_barang}/delete', [InventoryController::class, 'deleteRekapStok'])->name('admin.rekap.delete');
Route::post('/inventory/barang-masuk/store', [InventoryController::class, 'storeBarangMasuk'])->name('admin.masuk.store');
Route::put('/inventory/barang-masuk/{id}/update', [InventoryController::class, 'updateBarangMasuk'])->name('admin.masuk.edit');
Route::delete('/inventory/barang-masuk/{id}/delete', [InventoryController::class, 'deleteBarangMasuk'])->name('admin.masuk.delete');
Route::post('/inventory/barang-keluar/store', [InventoryController::class, 'storeBarangKeluar'])->name('admin.keluar.store');
Route::put('/inventory/barang-keluar/{id}/update', [InventoryController::class, 'updateBarangKeluar'])->name('admin.keluar.edit');
Route::delete('/inventory/barang-keluar/{id}/delete', [InventoryController::class, 'deleteBarangKeluar'])->name('admin.keluar.delete');

// Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Login and Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Google OAuth
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('auth.google');

Route::get('/auth/google/callback', function () {
    try {
        $googleUser = Socialite::driver('google')->stateless()->user();
    } catch (\Exception $e) {
        dd($e->getMessage());
    }

    $user = User::updateOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
            'password' => bcrypt(str()->random(16)), // Password acak untuk berjaga-jaga
        ]
    );

    Auth::login($user);

    return redirect('/dashboard'); // Redirect ke halaman utama setelah login
});

// dashboard checker
Route::get('/dashboard', [UserController::class, 'dashboardCheck'])->name('loginRedirect');

// Admin routes
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    // dashboard and tests
    Route::get('/admin/dashboard/invitation', [AdminController::class, 'indexInvitation'])->name('admin.dashboard.invitation');
    Route::get('/admin/dashboard/souvenir', [AdminController::class, 'indexSouvenir'])->name('admin.dashboard.souvenir');
    Route::get('/admin/dashboard/packaging', [AdminController::class, 'indexPackaging'])->name('admin.dashboard.packaging');
    Route::get('/admin/orders/invitation/detail/test', function(){return view('admin.invitation_detail_test');});

    //invitation
    Route::get('/admin/orders/invitation', [InvitationController::class, 'index'])->name('admin.invitation.view');
    Route::post('/admin/orders/invitation', [InvitationController::class, 'updatePaymentSubprocess'])->name('admin.invitation.update_payment_subprocess');
    Route::get('/admin/orders/invitation/{id}', [InvitationController::class, 'invitationDetails'])->name('admin.invitation.detail');
    Route::post('/admin/orders/invitation/{id}', [InvitationSPKController::class, 'store'])->name('admin.invitation.spk.store');
    Route::get('/admin/orders/invitation/{id}/edit', [InvitationController::class, 'edit'])->name('admin.invitation.edit');
    Route::post('/admin/orders/invitation/{id}/update', [InvitationController::class, 'update'])->name('admin.invitation.update');
    Route::post('/admin/orders/invitation/{id}/design-update', [InvitationController::class, 'updateDesignStatus'])->name('admin.invitation.design');
    Route::post('/admin/orders/invitation/{id}/upload-design', [InvitationController::class, 'uploadDesign'])->name('invitation.upload.image');

    //packaging
    Route::get('/admin/orders/packaging', [PackagingController::class, 'index'])->name('admin.packaging.view');
    Route::post('/admin/orders/packaging', [PackagingController::class, 'updatePaymentSubprocess'])->name('admin.packaging.update_payment_subprocess');
    Route::get('/admin/orders/packaging/{id}', [PackagingController::class, 'packagingDetails'])->name('admin.packaging.detail');
    Route::post('/admin/orders/packaging/{id}', [PackagingSPKController::class, 'store'])->name('admin.packaging.spk.store');
    Route::get('/admin/orders/packaging/{id}/edit', [PackagingController::class, 'edit'])->name('admin.packaging.edit');
    Route::post('/admin/orders/packaging/{id}/update', [PackagingController::class, 'update'])->name('admin.packaging.update');
    Route::post('/admin/orders/packaging/{id}/design-update', [PackagingController::class, 'updateDesignStatus'])->name('admin.packaging.design');
    Route::post('/admin/orders/packaging/{id}/upload-design', [PackagingController::class, 'uploadDesign'])->name('packaging.upload.image');

    //souvenir
    Route::get('/admin/orders/souvenir', [SouvenirController::class, 'index'])->name('admin.souvenir.view');
    Route::post('/admin/orders/souvenir', [SouvenirController::class, 'updatePaymentSubprocess'])->name('admin.souvenir.update_payment_subprocess');
    Route::get('/admin/orders/souvenir/{id}', [SouvenirController::class, 'souvenirDetails'])->name('admin.souvenir.detail');
    Route::post('/admin/orders/souvenir/{id}', [SouvenirSPKController::class, 'store'])->name('admin.souvenir.spk.store');
    Route::get('/admin/orders/souvenir/{id}/edit', [SouvenirController::class, 'edit'])->name('admin.souvenir.edit');
    Route::post('/admin/orders/souvenir/{id}/update', [SouvenirController::class, 'update'])->name('admin.souvenir.update');
    Route::post('/admin/orders/souvenir/{id}/design-update', [SouvenirController::class, 'updateDesignStatus'])->name('admin.souvenir.design');
    Route::post('/admin/orders/souvenir/{type}/{id}/upload-design', [SouvenirController::class, 'uploadDesign'])->name('souvenir.upload.image');

    // pesanan selesai
    Route::get('/admin/orders/done', [OrderController::class, 'finishedOrders'])->name('admin.done.view');
    Route::post('/admin/orders/delete/{id}', [OrderController::class, 'deleteOrder'])->name('admin.order.delete');

    // update progress
    Route::post('/admin/orders/{id}/update-progress', [OrderController::class, 'updateProgress'])->name('orders.updateProgress');
    Route::post('/admin/orders/{id}/previous-progress', [OrderController::class, 'previousProgress'])->name('orders.previousProgress');

    //reminder
    Route::get('/admin/reminder/invitation', [InvitationController::class, 'reminder'])->name('admin.reminder.invitation');
    Route::get('/admin/reminder/souvenir', [SouvenirController::class, 'reminder'])->name('admin.reminder.souvenir');
    Route::get('/admin/reminder/packaging', [PackagingController::class, 'reminder'])->name('admin.reminder.packaging');
    Route::get('/admin/reminder/{id}', [OrderController::class, 'reminderDetail'])->name('admin.reminder.detail');

    // calendar
    Route::get('/admin/calendar/invitation', [InvitationController::class, 'calendar'])->name('admin.calendar.invitation');
    Route::get('/admin/calendar/souvenir', [SouvenirController::class, 'calendar'])->name('admin.calendar.souvenir');
    Route::get('/admin/calendar/packaging', [PackagingController::class, 'calendar'])->name('admin.calendar.packaging');
    Route::get('/api/deadlines/invitations', [InvitationController::class, 'getDeadlinesInvitations']);
    Route::get('/api/deadlines/souvenirs', [SouvenirController::class, 'getDeadlinesSouvenirs']);
    Route::get('/api/deadlines/packagings', [PackagingController::class, 'getDeadlinesPackagings']);

    // master-data
    Route::get('/admin/create-admin', [AdminController::class, 'createNewAdminShow'])->name('admin.create.admin.show');
    Route::get('/admin/change-credentials', [AdminController::class, 'changeCredentialsShow'])->name('admin.change.credentials.show');
    Route::post('/admin/create-admin', [AdminController::class, 'createNewAdmin'])->name('admin.create.admin');
    Route::post('/admin/change-credentials', [AdminController::class, 'changeCredentials'])->name('admin.change.credentials');

    // generate pdf
    Route::get('/pdf/generate/{type}/{id}/{parent_id}', [PdfController::class, 'generate'])->name('pdf.generate');
});

// User routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/orders', [OrderController::class, 'showOrders'])->name('orders.view');
    Route::post('/user/orders/{id}/accept', [OrderController::class, 'acceptImage'])->name('user.accept.design');
    Route::post('/user/orders/{id}/decline', [OrderController::class, 'declineImage'])->name('user.decline.design');
    Route::get('/user/orders/{type}/{id}', [OrderController::class, 'showOrderDetail'])->name('orders.detail');

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
