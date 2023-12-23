<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectoryController;

Route::get('/', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{category_id?}', [DirectoryController::class, 'index'])->name('directory.list');
Route::get('add', [DirectoryController::class, 'create'])->name('directory.create');
Route::post('add-directory', [DirectoryController::class, 'store'])->name('directory.store');
