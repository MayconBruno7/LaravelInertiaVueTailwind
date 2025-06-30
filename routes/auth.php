<?php

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\Auth\EmailVerificationsController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route as Route;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [AuthenticateController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticateController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticateController::class, 'destroy'])->name('logout');

    Route::get('/email/verify', [EmailVerificationsController::class, 'notice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [EmailVerificationsController::class, 'handler'])->middleware(['signed'])->name('verification.verify');
    Route::get('/email/verification-notification', [EmailVerificationsController::class, 'resend'])->middleware('throttle:6,1')->name('verification.send');
});
