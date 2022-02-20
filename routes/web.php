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
     Route::patch('/admin/releases/{release}/deactivate', [App\Http\Controllers\ReleaseController::class, 'deactivate'])->name('release.deactivate');

    //new CR
    Route::get('/admin/releases/crcreate', [App\Http\Controllers\CrController::class, 'create'])->name('cr.create');
    Route::post('/admin/releases/crsave', [App\Http\Controllers\CrController::class, 'store'])->name('cr.store');
    Route::post('/admin/releases/crs', [App\Http\Controllers\CrController::class, 'index'])->name('cr.index');
    Route::patch('/{cr}/updatestatus', [App\Http\Controllers\CrController::class, 'updateStatus'])->name('cr.updateStatus');


    //new TC
    Route::get('/admin/releases/{cr}/tccreate', [App\Http\Controllers\TcController::class, 'create'])->name('tc.create');
    Route::post('/admin/releases/{cr}/tcs/{view_name}', [App\Http\Controllers\TcController::class, 'store'])->name('tc.store');
    Route::get('/{cr}/tcs', [App\Http\Controllers\TcController::class, 'show'])->name('tc.show');
    Route::patch('/{tc}/updatestatus/{view_name}', [App\Http\Controllers\TcController::class, 'updateStatus'])->name('tc.updateStatus');

    //new Comments
    Route::get('/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comment.index');
    Route::post('/comments/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
});
