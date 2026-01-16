<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UCaseDesignController;

Route::get('/', [UCaseDesignController::class, 'welcome'])->name('welcome');


Route::get('/design', [UCaseDesignController::class, 'index'])->name('products');


Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected routes
    //Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
    Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'view'])->name('cart.view');
    Route::post('/cart/remove/{id}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
    Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');

    // PayFast
    Route::post('/payfast/ipn', [App\Http\Controllers\PayFastController::class, 'ipn'])->name('payment.ipn');
    Route::get('/payfast/success', [App\Http\Controllers\PayFastController::class, 'success'])->name('payment.success');
    Route::get('/payfast/cancel', [App\Http\Controllers\PayFastController::class, 'cancel'])->name('payment.cancel');
});

Route::get('/contact', [UCaseDesignController::class, 'contact'])->name('ucase.contact');
//these will need to be added for admin
Route::get('/phones', [UCaseDesignController::class, 'list'])->name('phones.index');
Route::post('/phones', [UCaseDesignController::class, 'store'])->name('phones.store');
Route::get('/phones/{phone}/edit', [UCaseDesignController::class, 'edit'])->name('phones.edit');
Route::put('/phones/{phone}', [UCaseDesignController::class, 'update'])->name('phones.update');
Route::get('/phones/create_design', [UCaseDesignController::class, 'create_design'])
     ->name('phones.create_design');
Route::post('/phones/create_design', [UCaseDesignController::class, 'store_case_design'])->name('phones.store_case_design');

Route::get('/phone_case_requests', [UCaseDesignController::class, 'phone_case_requests'])->name('admin.phone_case_requests');
Route::post('/phone_case_requests/status_change', [UCaseDesignController::class, 'phone_case_requests_status_change'])->name('admin.phone_case_requests.status_change');

