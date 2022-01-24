<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');


Route::middleware('auth')->group(function () {

    Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');
    Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::post('/admin/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

    Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::delete('/admin/posts/{post}/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
    Route::patch('/admin/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

    //new system 
    Route::get('/admin/releases/systemcreate', [App\Http\Controllers\SystemController::class, 'create'])->name('system.create');
    Route::post('/admin/systems', [App\Http\Controllers\SystemController::class, 'store'])->name('system.store');

    //new release
     Route::get('/admin/releases/releasecreate', [App\Http\Controllers\ReleaseController::class, 'create'])->name('release.create');
     Route::post('/admin/releases', [App\Http\Controllers\ReleaseController::class, 'store'])->name('release.store');

    //new CR
    Route::get('/admin/releases/crcreate', [App\Http\Controllers\CrController::class, 'create'])->name('cr.create');
    Route::post('/admin/releases/crs', [App\Http\Controllers\CrController::class, 'store'])->name('cr.store');

    //new TC
    Route::get('/admin/releases/tccreate', [App\Http\Controllers\CrController::class, 'create'])->name('tc.create');

});
