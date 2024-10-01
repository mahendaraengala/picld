<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentTransactionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactEnquiryController;
use App\Http\Controllers\Admin\SettingController;

Route::middleware(['guest:admin'])->group(function () {

    Route::get('login', [AuthController::class, 'viewLogin'])
        ->name('admin.view.login');
    Route::post('login', [AuthController::class, 'handleLogin'])
        ->name('admin.handle.login');

    Route::get('/forgot-password', [AuthController::class, 'viewForgotPassword'])
        ->name('admin.view.forgot.password');
    Route::post('/forgot-password', [AuthController::class, 'handleForgotPassword'])
        ->name('admin.handle.forgot.password');

    Route::get('/reset-password/{token}', [AuthController::class, 'viewResetPassword'])
        ->name('admin.view.reset.password');
    Route::post('/reset-password/{token}', [AuthController::class, 'handleResetPassword'])
        ->name('admin.handle.reset.password');
});

Route::middleware(['auth:admin'])->group(function () {

    Route::post('logout', function () {
        Auth::logout();
        return redirect()->route('admin.view.login');
    })->name('admin.handle.logout');

    Route::get('dashboard', [DashboardController::class, 'viewDashboard'])
        ->name('admin.view.dashboard');

    Route::prefix('contact-enquiry')->controller(ContactEnquiryController::class)->group(function () {
        Route::get('/', 'viewContactEnquiryList')->name('admin.view.contact.enquiry.list');
        Route::get('/preview/{id}', 'viewContactEnquiryPreview')->name('admin.view.contact.enquiry.preview');
        Route::put('/status', 'handleToggleContactEnquiryStatus')->name('admin.handle.contact.enquiry.status');
        Route::get('/delete/{id}', 'handleContactEnquiryDelete')->name('admin.handle.contact.enquiry.delete');
    });

    Route::prefix('order')->controller(OrderController::class)->group(function () {
        Route::get('/', 'viewOrderList')->name('admin.view.order.list');
        Route::get('/preview/{id}', 'viewOrderPreview')->name('admin.view.order.preview');
        Route::put('/status', 'handleToggleOrderStatus')->name('admin.handle.order.status');
        Route::get('/delete/{id}', 'handleOrderDelete')->name('admin.handle.order.delete');
        Route::post('/delete', 'handleOrderDelete1')->name('admin.handle.order.delete1');
        Route::get('/confirm/{id}', 'handleOrderConfirm')->name('admin.handle.order.confirm');
        Route::get('/download/invoice/{id}', 'handleDownloadInvoice')->name('admin.handle.download.order.invoice');
    });

    Route::prefix('user')->controller(UserController::class)->group(function () {
        Route::get('/', 'viewUserList')->name('admin.view.user.list');
        Route::get('/preview/{uuid}', 'viewUserPreview')->name('admin.view.user.preview');
    });

    Route::prefix('payment-transaction')->controller(PaymentTransactionController::class)->group(function () {
        Route::get('/', 'viewPaymentTransactionList')->name('admin.view.payment.transaction.list');
        Route::get('/preview/{uuid}', 'viewPaymentTransactionPreview')->name('admin.view.payment.transaction.preview');
    });

    Route::prefix('setting')->controller(SettingController::class)->group(function () {
        Route::get('/', 'viewSetting')->name('admin.view.setting');
        Route::get('/account-information', 'viewAccountSetting')->name('admin.view.setting.account');
        Route::post('/account-information', 'handleAccountSetting')->name('admin.handle.setting.account');
        Route::get('/update-password', 'viewPasswordSetting')->name('admin.view.setting.password');
        Route::post('/update-password', 'handlePasswordSetting')->name('admin.handle.setting.password');
    });
});
