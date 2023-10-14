<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;


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

    //Media
    Route::prefix('media')->group(function () {
        Route::post('/store',[BlogController::class, 'saveFiles']);
        Route::delete('/delete/{id}',[BlogController::class, 'deleteFile']);
    });
});