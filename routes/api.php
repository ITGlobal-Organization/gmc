<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('user')->middleware(['auth:sanctum','user'])->group(function () {
    Route::post('/member/invite',[MemberController::class,'invite'])->name('member.invite.store');
    Route::get('/member/invite/{token}',[MemberController::class,'getInvite'])->name('member.invite.get');
});

// Card Crud

Route::prefix('cards')->middleware(['auth:sanctum','user'])->group(function(){
   
    Route::get('/',[CardController::class,'render'])->name('schemes.index');
    Route::post('/',[CardController::class,'store'])->name('cards.store');
    Route::post('/{id}',[CardController::class,'update'])->name('schemes.update');
    Route::get('/{id}',[CardController::class,'get'])->name('schemes.get');
    Route::delete('/{id}',[CardController::class,'destroy'])->name('schemes.delete');
});

Route::prefix('schemes')->middleware(['auth:sanctum','user'])->group(function(){
    Route::get('/',[CardController::class,'getAllSchemes'])->name('schemes.index');
    Route::post('/',[CardController::class,'storeScheme'])->name('schemes.store');
    Route::post('/{id}',[CardController::class,'updateScheme'])->name('schemes.update');
    Route::get('/{id}',[CardController::class,'getScheme'])->name('schemes.get');
});


require __DIR__ . '/auth.php';