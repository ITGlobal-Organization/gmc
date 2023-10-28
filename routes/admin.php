<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\DirectoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SpaceFinderController;
use App\Http\Controllers\EventCalenderController;

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
//Directory
Route::prefix('directory')->group(function(){
    Route::get('/',[DirectoryController::class, 'index'])->name('admin.directory.index');
    Route::get('/ajax', [DirectoryController::class, 'render'])->name('admin.directory.ajax');
    Route::get('/create',[DirectoryController::class, 'create'])->name('admin.directory.create');
    Route::post('/',[DirectoryController::class, 'store'])->name('admin.directory.store');
    Route::get('/{id}',[DirectoryController::class, 'get'])->name('admin.directory.header');
    Route::get('/edit/{id}',[DirectoryController::class, 'edit'])->name('admin.directory.edit');
    Route::put('/update/{id}',[DirectoryController::class, 'update'])->name('admin.directory.update');
    Route::delete('/delete/{id}',[DirectoryController::class, 'destroy'])->name('admin.directory.destroy');
});

//SpaceFinder
Route::prefix('spacefinder')->group(function(){
    Route::get('/',[SpaceFinderController::class, 'index'])->name('admin.spacefinder.index');
    Route::get('/ajax', [SpaceFinderController::class, 'render'])->name('admin.spacefinder.ajax');
    Route::get('/create',[SpaceFinderController::class, 'create'])->name('admin.spacefinder.create');
    Route::post('/',[SpaceFinderController::class, 'store'])->name('admin.spacefinder.store');
    Route::get('/{id}',[SpaceFinderController::class, 'get'])->name('admin.spacefinder.header');
    Route::get('/edit/{id}',[SpaceFinderController::class, 'edit'])->name('admin.spacefinder.edit');
    Route::put('/update/{id}',[SpaceFinderController::class, 'update'])->name('admin.spacefinder.update');
    Route::delete('/delete/{id}',[SpaceFinderController::class, 'destroy'])->name('admin.spacefinder.destroy');
});
//Event Calender
Route::prefix('eventcalender')->group(function(){
    Route::get('/',[EventCalenderController::class, 'index'])->name('admin.eventcalender.index');
    Route::get('/ajax', [EventCalenderController::class, 'render'])->name('admin.eventcalender.ajax');
    Route::get('/create',[EventCalenderController::class, 'create'])->name('admin.eventcalender.create');
    Route::post('/',[EventCalenderController::class, 'store'])->name('admin.eventcalender.store');
    Route::get('/{id}',[EventCalenderController::class, 'get'])->name('admin.eventcalender.header');
    Route::get('/edit/{id}',[EventCalenderController::class, 'edit'])->name('admin.eventcalender.edit');
    Route::put('/update/{id}',[EventCalenderController::class, 'update'])->name('admin.eventcalender.update');
    Route::delete('/delete/{id}',[EventCalenderController::class, 'destroy'])->name('admin.eventcalender.destroy');
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

