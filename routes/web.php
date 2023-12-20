<?php

use Illuminate\Support\Facades\Route;

// Voyager TODO:: uninstall it !!
//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});
//
Route::get('/', function (){
    return view('welcome');
});

