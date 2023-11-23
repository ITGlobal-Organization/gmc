<?php
namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpaceFinderController;
use App\Http\Controllers\EventCalenderController;
// use App\Http\Controllers\OrderController;
// use App\Http\Controllers\QuoteController;
// use App\Http\Controllers\CheckoutController;
// dd('here');


Route::get('/', [DashboardController::class, 'dashboard'])->name('user.dashboard');

//Events
Route::prefix('events')->group(function(){
    Route::get('/', [EventCalenderController::class, 'getEventsListing'])->name('user.events');
    Route::get('/ajax',[EventCalenderController::class,'renderForm'])->name('user.events.ajax');
    Route::get('/edit/{id}',[EventCalenderController::class, 'renderForm'])->name('user.events.edit');
    Route::post('/update/{id}',[EventCalenderController::class, 'update'])->name('user.events.update');
});
//SpaceFinders
Route::prefix('space-finders')->group(function(){
    Route::get('/', [SpaceFinderController::class, 'getSpaceFindersListing'])->name('user.space-finders');
    Route::get('/ajax',[SpaceFinderController::class,'renderForm'])->name('user.space-finders.ajax');
    Route::get('/edit/{id}',[SpaceFinderController::class, 'renderForm'])->name('user.space-finders.edit');
    Route::post('/update/{id}',[SpaceFinderController::class, 'update'])->name('user.space-finders.update');
});
//SpaceFinders
Route::prefix('details')->group(function(){
    Route::get('/', [DashboardController::class, 'dashboard'])->name('user.directory-details');
});
// Route::get('/checkout',[CheckoutController::class,'renderCheckOutView'])->name('user.checkout.index');
// Route::get('/', [DashboardController::class, 'dashboard'])->name('user.dashboard');
// // Orders
// Route::get('/place-order', [DashboardController::class,'renderPlaceOrder'])->name('user.place-order');
// Route::post('/place-order', [OrderController::class,'store'])->name('user.orders.store');
// Route::get('/orders', [DashboardController::class,'renderOrdersHistory'])->name('user.orders.history');
// Route::get('/orders/inprogress', [DashboardController::class,'renderInProgressOrders'])->name('user.orders.inprogress');
// // api request
// Route::get('/orders/ajax', [OrderController::class,'getAllOrders'])->name('user.orders.history.ajax');
// Route::get('/inprogress-orders/ajax', [OrderController::class,'getAllInProgressOrders'])->name('user.inprogress-orders.ajax');

// // Invoice
// Route::get('/invoice', [DashboardController::class,'renderInvoice'])->name('user.invoice');
// // quotes
// Route::get('/place-quote', [DashboardController::class,'renderPlaceQuote'])->name('user.place-quote');
// Route::post('/place-quote', [QuoteController::class,'store'])->name('user.quotes.store');
// Route::get('/quotes', [DashboardController::class,'renderQuotesHistory'])->name('user.quotes.history');
// Route::get('/quotes/ajax', [QuoteController::class,'getAllOrders'])->name('user.quotes.history.ajax');

// // Add Card
// Route::get('/payment/charge', [CustomerController::class,'chargeStripePayment'])->name('user.payment.charge');
// Route::post('/create-payment-intent', [CustomerController::class,'createPaymentIntent'])->name('payment.intent');

// // Proceed Order
// Route::post('/order',[CheckoutController::class,'orderProceed'])->name('user.order.proceed');
// Route::get('/order/thankyou',[CheckoutController::class,'thankyou'])->name('user.order.thankyou');
