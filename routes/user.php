<?php
namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaceFinderController;
use App\Http\Controllers\M2MOfferController;
use App\Http\Controllers\EventCalenderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TopicController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\OrderController;
// use App\Http\Controllers\QuoteController;
// use App\Http\Controllers\CheckoutController;
// dd('here');


Route::get('/', [DashboardController::class, 'dashboard'])->name('user.dashboard');

//Events
Route::prefix('events')->group(function(){
    Route::get('/', [EventCalenderController::class, 'eventCalenders'])->name('user.events');
    Route::post('/', [EventCalenderController::class, 'store'])->name('user.events.store');
    Route::get('/ajax',[EventCalenderController::class,'renderForm'])->name('user.events.ajax');
    Route::get('/listing',[EventCalenderController::class,'getEventsListing'])->name('user.events.listing');
    Route::get('/edit/{id}',[EventCalenderController::class, 'renderForm'])->name('user.events.edit');
    Route::post('/update/{id}',[EventCalenderController::class, 'update'])->name('user.events.update');
    Route::post('/delete/{id}',[EventCalenderController::class, 'destroy'])->name('user.events.destroy');
    Route::get('/search-events',[EventCalenderController::class,'getEventsListing'])->name('user.event-calenders.search');
    Route::get('/create',function(){
        return view('user.event.create');
    })->name('user.events.create');
    Route::delete('/media/delete/{id}',[EventCalenderController::class,'deleteFiles'])->name('user.events.media-upload');
});
//SpaceFinders
Route::prefix('space-finders')->group(function(){
    Route::get('/', [SpaceFinderController::class, 'spaceFinders'])->name('user.space-finders');
    Route::post('/', [SpaceFinderController::class, 'store'])->name('user.space-finders.store');
    Route::get('/ajax',[SpaceFinderController::class,'renderForm'])->name('user.space-finders.ajax');
    Route::get('/listing',[SpaceFinderController::class,'getSpaceFindersListing'])->name('user.space-finders.listing');
    Route::get('/edit/{id}',[SpaceFinderController::class, 'renderForm'])->name('user.space-finders.edit');
    Route::post('/update/{id}',[SpaceFinderController::class, 'update'])->name('user.space-finders.update');
    Route::post('/delete/{id}',[SpaceFinderController::class, 'destroy'])->name('user.space-finders.destroy');
    Route::get('/create',function(){
        return view('user.space-finder.create');
    })->name('user.space-finders.create');
});
//ProfileDetails
// Route::get('/company/edit', [DashboardController::class, 'editProfile'])->name('user.company.edit');
Route::prefix('profile')->group(function(){
    Route::get('/edit',[DashboardController::class ,'edit'])->name('user.profile.edit');
    Route::post('/update/{id}',[DashboardController::class, 'update'])->name('user.profile.update');
});
//DirectoryDetails
// Route::get('/company/edit', [DashboardController::class, 'editProfile'])->name('user.company.edit');
Route::prefix('company')->group(function(){
    Route::get('/edit',[DirectoryController::class ,'edit'])->name('user.company.edit');
    Route::post('/update/{id}',[DirectoryController::class, 'update'])->name('user.company.update');
});
// News
Route::prefix('news')->group(function(){
    Route::get('/', [BlogController::class, 'blogs'])->name('user.news');
    Route::post('/', [BlogController::class, 'store'])->name('user.news.store');
    // Route::get('/ajax',[BlogController::class,'renderForm'])->name('user.offers.ajax');
    Route::get('/listing',[BlogController::class,'getBlogsListing'])->name('user.news.listing');
    Route::get('/edit/{id}',[BlogController::class, 'renderForm'])->name('user.news.edit');
    Route::post('/update/{id}',[BlogController::class, 'update'])->name('user.news.update');
    Route::post('/delete/{id}',[BlogController::class, 'destroy'])->name('user.news.destroy');
    Route::get('/create',function(){
        return view('user.news.create');
    })->name('user.news.create');
});
//M2MOffers
Route::prefix('offers')->group(function(){
    Route::get('/', [M2MOfferController::class, 'Offers'])->name('user.offers');
    Route::post('/', [M2MOfferController::class, 'store'])->name('user.offers.store');
    // Route::get('/ajax',[M2MOfferController::class,'renderForm'])->name('user.offers.ajax');
    Route::get('/listing',[M2MOfferController::class,'getOffersListing'])->name('user.offers.listing');
    Route::get('/edit/{id}',[M2MOfferController::class, 'renderForm'])->name('user.offers.edit');
    Route::post('/update/{id}',[M2MOfferController::class, 'update'])->name('user.offers.update');
    Route::post('/delete/{id}',[M2MOfferController::class, 'destroy'])->name('user.offers.destroy');
    Route::get('/create',function(){
        return view('user.offer.create');
    })->name('user.offers.create');
});

//Employees
Route::prefix('employees')->group(function(){
    Route::get('/', [EmployeeController::class, 'employees'])->name('user.employees');
    Route::post('/', [EmployeeController::class, 'store'])->name('user.employees.store');
    // Route::get('/ajax',[EmployeeController::class,'renderForm'])->name('user.events.ajax');
    Route::get('/listing',[EmployeeController::class,'getEmployeesListing'])->name('user.employees.listing');
    Route::get('/edit/{id}',[EmployeeController::class, 'renderForm'])->name('user.employees.edit');
    Route::post('/update/{id}',[EmployeeController::class, 'update'])->name('user.employees.update');
    Route::post('/delete/{id}',[EmployeeController::class, 'destroy'])->name('user.employees.destroy');
    Route::get('/create',function(){
        return view('user.employee.create');
    })->name('user.employees.create');
    // Route::delete('/media/delete/{id}',[EmployeeController::class,'deleteFiles'])->name('user.events.media-upload');
});

Route::prefix('chat')->group(function(){
    Route::get('/', [MessageController::class, 'index'])->name('user.chat.index');
    Route::get('/search', [MessageController::class, 'searchUser'])->name('user.chat.search');
    Route::post('/', [MessageController::class, 'send'])->name('user.chat.send');
    Route::get('/messages',[MessageController::class, 'userMessages'])->name('user.chat.messages');
    Route::post('/readed',[MessageController::class, 'updateMsg'])->name('user.chat.readed');
    // web socket authentication
    Route::post('/typing',[MessageController::class, 'userTyping'])->name('user.chat.typing');
    Route::get('/list',[MessageController::class, 'chatList'])->name('user.chat.list');
});
Route::prefix('forum')->group(function(){
    Route::get('/', [TopicController::class, 'forum'])->name('user.forum.index');
    // Route::get('/search', [MessageController::class, 'searchUser'])->name('user.chat.search');
    // Route::post('/', [MessageController::class, 'send'])->name('user.chat.send');
    // Route::get('/messages',[MessageController::class, 'userMessages'])->name('user.chat.messages');
    // Route::post('/readed',[MessageController::class, 'updateMsg'])->name('user.chat.readed');
    // // web socket authentication
    // Route::post('/typing',[MessageController::class, 'userTyping'])->name('user.chat.typing');
    // Route::get('/list',[MessageController::class, 'chatList'])->name('user.chat.list');
});



