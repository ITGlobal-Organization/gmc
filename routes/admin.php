<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\DirectoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SpaceFinderController;
use App\Http\Controllers\EventCalenderController;
use App\Http\Controllers\PlatinumPartnerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\M2MOfferController;

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
//    update status
    Route::post('/update/status',[BlogController::class, 'updateStatus'])->name('admin.blogs.update.status');
    Route::put('/update/{id}',[BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/delete/{id}',[BlogController::class, 'destroy'])->name('admin.blogs.destroy');
});

// Topics
Route::prefix('topics')->group(function(){
    Route::get('/',[TopicController::class, 'index'])->name('admin.topics.index');
    Route::get('/ajax', [TopicController::class, 'render'])->name('admin.topics.ajax');
    Route::get('/create',[TopicController::class, 'create'])->name('admin.topics.create');
    Route::post('/',[TopicController::class, 'store'])->name('admin.topics.store');
    Route::get('/{id}',[TopicController::class, 'get'])->name('admin.topics.get');
    Route::get('/edit/{id}',[TopicController::class, 'edit'])->name('admin.topics.edit');
    Route::put('/update/{id}',[TopicController::class, 'update'])->name('admin.topics.update');
    Route::delete('/delete/{id}',[TopicController::class, 'destroy'])->name('admin.topics.destroy');
});
//Directory
Route::prefix('directory')->group(function(){

    // categories
    Route::prefix('categories')->group(function(){
        Route::get('/',[CategoryController::class, 'index'])->name('admin.directory-categories.index');
        Route::get('/ajax', [CategoryController::class, 'render'])->name('admin.directory-categories.ajax');
        Route::get('/create',[CategoryController::class, 'create'])->name('admin.directory-categories.create');
        Route::post('/',[CategoryController::class, 'store'])->name('admin.directory-categories.store');
        Route::get('/{id}',[CategoryController::class, 'get'])->name('admin.directory-categories.get');
        Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('admin.directory-categories.edit');
        Route::put('/update/{id}',[CategoryController::class, 'update'])->name('admin.directory-categories.update');
        Route::delete('/delete/{id}',[CategoryController::class, 'destroy'])->name('admin.directory-categories.destroy');
    });


    Route::get('/',[DirectoryController::class, 'index'])->name('admin.directory.index');
    Route::get('/ajax', [DirectoryController::class, 'render'])->name('admin.directory.ajax');
    Route::get('/create',[DirectoryController::class, 'create'])->name('admin.directory.create');
    Route::post('/',[DirectoryController::class, 'store'])->name('admin.directory.store');
    Route::get('/{id}',[DirectoryController::class, 'get'])->name('admin.directory.header');
    Route::get('/edit/{id}',[DirectoryController::class, 'edit'])->name('admin.directory.edit');
    //    update status
    Route::post('/update/status',[DirectoryController::class, 'updateStatus'])->name('admin.directory.update.status');
    Route::put('/update/{id}',[DirectoryController::class, 'update'])->name('admin.directory.update');
    Route::delete('/delete/{id}',[DirectoryController::class, 'destroy'])->name('admin.directory.destroy');


});

//PlatinumPartners
Route::prefix('platinumpartners')->group(function(){
    Route::get('/',[PlatinumPartnerController::class, 'index'])->name('admin.platinumpartners.index');
    Route::get('/ajax', [PlatinumPartnerController::class, 'render'])->name('admin.platinumpartners.ajax');
    Route::get('/create',[PlatinumPartnerController::class, 'create'])->name('admin.platinumpartners.create');
    Route::post('/',[PlatinumPartnerController::class, 'store'])->name('admin.platinumpartners.store');
    Route::get('/{id}',[PlatinumPartnerController::class, 'get'])->name('admin.platinumpartners.header');
    Route::get('/edit/{id}',[PlatinumPartnerController::class, 'edit'])->name('admin.platinumpartners.edit');
        //    update status
    Route::post('/update/status',[PlatinumPartnerController::class, 'updateStatus'])->name('admin.platinumpartners.update.status');
    Route::put('/update/{id}',[PlatinumPartnerController::class, 'update'])->name('admin.platinumpartners.update');
    Route::delete('/delete/{id}',[PlatinumPartnerController::class, 'destroy'])->name('admin.platinumpartners.destroy');
});

//SpaceFinder
Route::prefix('spacefinder')->group(function(){
    Route::get('/',[SpaceFinderController::class, 'index'])->name('admin.spacefinder.index');
    Route::get('/ajax', [SpaceFinderController::class, 'render'])->name('admin.spacefinder.ajax');
    Route::get('/create',[SpaceFinderController::class, 'create'])->name('admin.spacefinder.create');
    Route::post('/',[SpaceFinderController::class, 'store'])->name('admin.spacefinder.store');
    Route::get('/{id}',[SpaceFinderController::class, 'get'])->name('admin.spacefinder.header');
    Route::get('/edit/{id}',[SpaceFinderController::class, 'edit'])->name('admin.spacefinder.edit');
          //    update status
    Route::post('/update/status',[SpaceFinderController::class, 'updateStatus'])->name('admin.spacefinder.update.status');
    Route::put('/update/{id}',[SpaceFinderController::class, 'update'])->name('admin.spacefinder.update');
    Route::delete('/delete/{id}',[SpaceFinderController::class, 'destroy'])->name('admin.spacefinder.destroy');
});
//Event Calender
Route::prefix('eventcalender')->group(function(){
    Route::get('/',[EventCalenderController::class, 'index'])->name('admin.eventcalender.index');
    Route::get('/ajax', [EventCalenderController::class, 'render'])->name('admin.eventcalender.ajax');
    Route::get('/create',[EventCalenderController::class, 'create'])->name('admin.eventcalender.create');
    Route::post('/',[EventCalenderController::class, 'store'])->name('admin.eventcalender.store');
    Route::get('/categories',[EventCalenderController::class, 'getCategories'])->name('admin.eventcalender.categories');
    Route::get('/{id}',[EventCalenderController::class, 'get'])->name('admin.eventcalender.header');
    Route::get('/edit/{id}',[EventCalenderController::class, 'edit'])->name('admin.eventcalender.edit');
         //    update status
    Route::post('/update/status',[EventCalenderController::class, 'updateStatus'])->name('admin.eventcalender.update.status');
    Route::put('/update/{id}',[EventCalenderController::class, 'update'])->name('admin.eventcalender.update');
    Route::delete('/delete/{id}',[EventCalenderController::class, 'destroy'])->name('admin.eventcalender.destroy');

    // Event Categories


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
            //    update status
    Route::post('/update/status',[RegisteredUserController::class, 'updateStatus'])->name('admin.user.update.status');
    Route::put('/update/{id}',[RegisteredUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/delete/{id}',[RegisteredUserController::class, 'destroy'])->name('admin.users.destroy');


});


// Users
Route::prefix('offers')->group(function(){
    Route::get('/',[M2MOfferController::class, 'index'])->name('admin.offers.index');
    // Route::get('/user',[M2MOfferController::class, 'getoffers'])->name('admin.offers.get');
    Route::get('/ajax', [M2MOfferController::class, 'render'])->name('admin.offers.ajax');
    Route::get('/create',[M2MOfferController::class, 'create'])->name('admin.offers.create');
    Route::post('/',[M2MOfferController::class, 'store'])->name('admin.offers.store');
    // Route::get('/roles',[BaseController::class, 'getAllRoles'])->name('admin.offers.roles');
    Route::get('/{id}',[M2MOfferController::class, 'get'])->name('admin.offers.header');
    Route::get('/edit/{id}',[M2MOfferController::class, 'edit'])->name('admin.offers.edit');
      //    update status
    Route::post('/update/status',[M2MOfferController::class, 'updateStatus'])->name('admin.offers.update.status');
    Route::put('/update/{id}',[M2MOfferController::class, 'update'])->name('admin.offers.update');
    Route::delete('/delete/{id}',[M2MOfferController::class, 'destroy'])->name('admin.offers.destroy');
});

