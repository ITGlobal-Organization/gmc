<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ZohoController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {


    Route::get('admin/login', [AuthenticatedSessionController::class, 'createAdmin'])
        ->name('admin.login');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('login', [AuthenticatedSessionController::class, 'auth'])->name('login.post');
    Route::post('register', [ZohoController::class, 'register'])->name('register.post');



    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
    // Ideas


});



Route::middleware(['auth'])->group(function () {

    Route::get('otp', [AuthenticatedSessionController::class, 'getOTP'])
        ->name('auth.otp');
    Route::post('otp', [AuthenticatedSessionController::class, 'verifyOTP'])
        ->name('otp.verify');


    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);


    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
