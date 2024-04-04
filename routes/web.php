<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\SpaceFinderController;
use App\Http\Controllers\PlatinumPartnerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Events\ChatMessageSent;
use Illuminate\Http\Request;
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

// Contact-Us
Route::post('/contact-us',[SitePageController::class,'contactUs'])->name('contact-us');

// Blogs
Route::prefix('blogs')->group(function () {
    Route::get('/',[BlogController::class,'blogs'])->name('blogs.index');
    Route::get('/ajax',[BlogController::class,'getBlogsListing'])->name('blogs.ajax');

    Route::get('/{slug}',[BlogController::class,'getBlog'])->name('blogs.get')->middleware('auth');
});

// Directiories
Route::prefix('directories')->group(function () {
    Route::get('/categories',[CategoryController::class,'renderCategoriesView'])->name('directories.category.index')->middleware('auth');
    Route::get('/categories/ajax',[CategoryController::class,'getCategoriesListing'])->name('directories.category.ajax');
    Route::get('/',[DirectoryController::class,'directories'])->name('directories.index')->middleware('auth');
    Route::get('/ajax',[DirectoryController::class,'getDirectoryListing'])->name('directories.ajax');
    Route::get('/{slug}',[DirectoryController::class,'getDirectory'])->name('directories.get')->middleware('auth');
});
Route::get('/search-directories',[DirectoryController::class,'searchDirectories'])->name('directories.search');

// Space-Finders
Route::prefix('space-finders')->group(function () {
    Route::get('/',[SpaceFinderController::class,'spaceFinders'])->name('space-finders.index');
    Route::get('/ajax',[SpaceFinderController::class,'getSpaceFindersListing'])->name('space-finders.ajax');
    Route::get('/{slug}',[SpaceFinderController::class,'getSpaceFinder'])->name('space-finders.get');
});
Route::get('/search-spacefinders',[SpaceFinderController::class,'searchSpaceFinders'])->name('space-finders.search');

// Event-Calenders
Route::prefix('event-calenders')->group(function () {

    Route::get('/',[EventCalenderController::class,'eventCalenders'])->name('event-calenders.index');
    Route::get('/book/{slug}',[EventCalenderController::class,'bookEventView'])->name('event.book');
    Route::post('/book',[EventCalenderController::class,'bookEvent'])->name('event.book.store');
    Route::get('/ajax',[EventCalenderController::class,'getEventsListing'])->name('event-calenders.ajax');
    Route::get('/{slug}',[EventCalenderController::class,'getEvent'])->name('event-calenders.get')->middleware('auth');
    Route::get('/{view}/{slug}',[EventCalenderController::class,'getEvent'])->name('event-calenders.get');

});
Route::get('/search-events',[EventCalenderController::class,'getEventsListing'])->name('event-calenders.search');



//Tabs
Route::get('/benefits-tab',[SitePageController::class,'benefitsTab'])->name('benefits-tab.ajax');
Route::get('/all-tab',[SitePageController::class,'allTab'])->name('all-tab.ajax');
Route::get('/events-tab',[SitePageController::class,'eventsTab'])->name('events-tab.ajax');
Route::get('/offers-tab',[SitePageController::class,'offersTab'])->name('offers-tab.ajax');
Route::get('/news-tab',[SitePageController::class,'newsTab'])->name('news-tab.ajax');
Route::get('/platinum-partners-tab',[SitePageController::class,'platinumPartnersTab'])->name('platinum-partners-tab.ajax');
// Route::get('/platinum-partners',[SitePageController::class,'platinumPartners'])->name('platinum-partners.ajax');

// Platinum-Partners
Route::prefix('platinum-partners')->group(function () {
    Route::get('/',[PlatinumPartnerController::class,'platinumPartners'])->name('platinum-partners.index');
    Route::get('/ajax',[PlatinumPartnerController::class,'getPlatinumPartnersListing'])->name('platinum-partners.ajax');
    Route::get('/{slug}',[PlatinumPartnerController::class,'getPlatinumPartner'])->name('platinum-partners.get');
});

// M2MOffers
Route::prefix('offers')->group(function () {
    Route::get('/',[M2MOfferController::class,'Offers'])->name('offers.index');
    Route::get('/ajax',[M2MOfferController::class,'getOffersListing'])->name('offers.ajax');
    Route::get('/{slug}',[M2MOfferController::class,'getOffer'])->name('offers.get')->middleware('auth');
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
//User

Route::prefix('user')->middleware(['auth:sanctum','otp','user','profile'])->group(function () {
    require __DIR__ . '/user.php';
});

// Route::get('/platinium-partners',function(){
//     return view('pages.platinium-partners');
// })->name('platinium-partners');

// Route::get('/jobs-hub',function(){
//     return view('pages.jobs-hub');
// })->name('jobs-hub');

// Route::get('/international',function(){
//     return view('pages.international');
// })->name('international');

// Route::get('/mentoring',function(){
//     return view('pages.mentoring');
// })->name('mentoring');

Route::get('/staff',function(){
    return view('pages.staff');
})->name('staff');
// Static Pages
Route::get('/',[SitePageController::class,'renderMainPage'])->name('home');
Route::get('/{page}',[SitePageController::class,'renderSitePages'])->name('site-pages');


// media upload
Route::post('/media/upload',[BaseController::class,'saveFiles'])->name('media-upload');
Route::delete('/media/delete/{id}',[BaseController::class,'deleteFiles'])->name('media-upload');

// Payments
Route::post('/payment/webhook', [PaymentController::class, 'handleWebhook']);
Route::get('/payment/charge', [PaymentController::class,'chargeStripePayment'])->name('payment.charge');
Route::post('/create-payment-intent', [PaymentController::class,'createPaymentIntent'])->name('payment.intent');






