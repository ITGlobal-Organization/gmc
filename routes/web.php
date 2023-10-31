<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\SpaceFinderController;
use Artisan;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/error', function(){
    return view('errors.404');
});


// NewsLetter
Route::post('/newsletter',[BaseController::class,'newsletterSubscription'])->name('newsletter.subscribe');


// Blogs
Route::prefix('blogs')->group(function () {
    Route::get('/',[BlogController::class,'blogs'])->name('blogs.index');
    Route::get('/ajax',[BlogController::class,'getBlogsListing'])->name('blogs.ajax');

    Route::get('/{slug}',[BlogController::class,'getBlog'])->name('blogs.get');
});

// Directiories
Route::prefix('directories')->group(function () {
    Route::get('/',[DirectoryController::class,'directories'])->name('directories.index');
    Route::get('/ajax',[DirectoryController::class,'getDirectoryListing'])->name('directories.ajax');

    Route::get('/{slug}',[DirectoryController::class,'getDirectory'])->name('directories.get');
});

// Space-Finders
Route::prefix('space-finders')->group(function () {
    Route::get('/',[SpaceFinderController::class,'spaceFinders'])->name('space-finders.index');
    Route::get('/ajax',[SpaceFinderController::class,'getSpaceFindersListing'])->name('space-finders.ajax');
    Route::get('/{slug}',[SpaceFinderController::class,'getSpaceFinder'])->name('space-finders.get');
});

// Event-Calenders
Route::prefix('event-calenders')->group(function () {
    Route::get('/',[EventCalenderController::class,'eventCalenders'])->name('event-calenders.index');
    Route::get('/ajax',[EventCalenderController::class,'geteventCalenders'])->name('event-calenders.ajax');
    Route::get('/{slug}',[EventCalenderController::class,'geteventCalender'])->name('event-calenders.get');
});

Route::prefix('developer')->group(function () {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    Route::get('/artisan', function () {
        Artisan::call("view:cache");
        Artisan::call("view:clear");
        Artisan::call("config:cache");
        Artisan::call("config:clear");
        Artisan::call("cache:clear");

        dd('clear');
    });
});


require __DIR__ . '/auth.php';



Route::prefix('admin')->middleware(['auth:sanctum','admin'])->group(function () {
    require __DIR__ . '/admin.php';
});

// Static Pages
Route::get('/',[SitePageController::class,'renderMainPage'])->name('home');
Route::get('/{page}',[SitePageController::class,'renderSitePages'])->name('site-pages');


// media upload
Route::post('/media/upload',[BaseController::class,'saveFiles'])->name('media-upload');
Route::delete('/media/delete/{id}',[BaseController::class,'deleteFiles'])->name('media-upload');

Route::get('/platinium-partners',function(){
    return view('pages.platinium-partners');
})->name('platinium-partners');

Route::get('/jobs-hub',function(){
    return view('pages.jobs-hub');
})->name('jobs-hub');

Route::get('/international',function(){
    return view('pages.international');
})->name('international');

Route::get('/mentoring',function(){
    return view('pages.mentoring');
})->name('mentoring');



