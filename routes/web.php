<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BorderController;
use App\Http\Controllers\BackingController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
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

//get-product to show in modal
Route::get('/get-product-images',[ProductController::class,'getProducts'])->name('get-product-images');
//order-form
Route::get('/order-form',function(){
    return view('pages.order-form');
})->name('order-form');

// NewsLetter
Route::post('/newsletter',[BaseController::class,'newsletterSubscription'])->name('newsletter.subscribe');
Route::post('/contact-us',[BaseController::class,'saveContactForm'])->name('contact-us');
// Custom Form Posting

Route::post('/custom-form/get-a-quote',[SitePageController::class,'storeCustomForm'])->name('custom-form-posting');




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







Route::get('/featured-products',[SitePageController::class,'getListingProducts'])->name('home.featured-products');
// Route::get('/',function(){
//     return redirect()->route('admin.login');
// })->name('home');
// Categories
Route::get('/categories',[CategoryController::class,'categories'])->name('categories.all');
// Addons
Route::get('/addons',[AddonController::class,'addons'])->name('addons.all');
// Backings
Route::get('/backings',[BackingController::class,'backings'])->name('backings.all');
// Sizes
Route::get('/sizes/{id}',[ProductController::class,'getProductSizes'])->name('sizes.all');
//Products
Route::get('/products',[ProductController::class,'products'])->name('products.all');
//Customers
Route::get('/customers',[CustomerController::class,'customers'])->name('customers.all');
//Employee
Route::get('/employees',[EmployeeController::class,'employees'])->name('employees.all');
//Border
Route::get('/borders',[BorderController::class,'borders'])->name('borders.all');
//status
Route::get('/statuses',[OrderController::class, 'getAllStatuses'])->name('statuses.all');
// Static Pages
Route::get('/',[SitePageController::class,'renderMainPage'])->name('home');
Route::get('/{page}',[SitePageController::class,'renderSitePages'])->name('site-pages');


// media upload
Route::post('/media/upload',[BaseController::class,'saveFiles'])->name('media-upload');
Route::delete('/media/delete/{id}',[BaseController::class,'deleteFiles'])->name('media-upload');



