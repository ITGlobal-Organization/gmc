<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BaseController;

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
// Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/ajax', [DashboardController::class, 'index'])->name('admin.dashboard.ajax');
Route::get('/registrations/month', [DashboardController::class, 'getRegistrationsPreMonth'])->name('admin.registrations');
// Blogs
Route::prefix('blogs')->group(function(){
    Route::get('/',[BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/ajax', [BlogController::class, 'render'])->name('admin.blogs.ajax');
    Route::get('/create',[BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/',[BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/{id}',[BlogController::class, 'get'])->name('admin.blogs.header');
    Route::get('/edit/{id}',[BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/update/{id}',[BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/delete/{id}',[BlogController::class, 'destroy'])->name('admin.blogs.destroy');


});

// Users
Route::prefix('users')->group(function(){
    Route::get('/',[RegisteredUserController::class, 'index'])->name('admin.users.index');
    Route::get('/user',[RegisteredUserController::class, 'getUsers'])->name('admin.users.get');
    Route::get('/ajax', [RegisteredUserController::class, 'render'])->name('admin.users.ajax');
    Route::get('/create',[RegisteredUserController::class, 'create'])->name('admin.users.create');
    Route::post('/',[RegisteredUserController::class, 'store'])->name('admin.users.store');
    Route::get('/roles',[BaseController::class, 'getAllRoles'])->name('admin.users.roles');
    Route::get('/{id}',[RegisteredUserController::class, 'get'])->name('admin.users.header');
    Route::get('/edit/{id}',[RegisteredUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/update/{id}',[RegisteredUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/delete/{id}',[RegisteredUserController::class, 'destroy'])->name('admin.users.destroy');

    
});

