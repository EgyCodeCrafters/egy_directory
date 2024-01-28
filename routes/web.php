<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectoryController;

Route::get('/', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{category_id?}', [CategoryController::class, 'show'])->name('directory.show');
Route::get('add', [DirectoryController::class, 'create'])->name('directory.create');
Route::post('add-directory', [DirectoryController::class, 'store'])->name('directory.store');
Route::post('search', [DirectoryController::class, 'search'])->name('directory.search');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/clear-route-cache', function () {
    Artisan::call('route:clear');
    return 'Route cache cleared successfully.';
});
