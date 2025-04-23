<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectoryController;

Route::get('/', [CategoryController::class, 'index']);
Route::get('category/{category_id?}', [CategoryController::class, 'show']);
Route::get('add', [DirectoryController::class, 'create']);
Route::post('add-directory', [DirectoryController::class, 'store']);
Route::get('directory/{directory_id}', [DirectoryController::class, 'show']);
Route::post('search', [DirectoryController::class, 'search']);
Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/clear-route-cache', function () {
    Artisan::call('route:clear');

    return 'Route cache cleared successfully.';
});
