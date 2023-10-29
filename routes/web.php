<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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


Route::prefix('blogs')->group(function () {
    Route::get('/',[BlogController::class,'getBlogsListing'])->name('blogs.index');

    Route::get('/{slug}',function(){
        return view('blogs.blog-detail');
    })->name('blog');
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



