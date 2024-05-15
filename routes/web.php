<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('Home');
})->name('home');

// User resource controller ____
Route::get('/contact',[UserController::class,'contactShow'])->name('contact-show');
Route::get('/about',[UserController::class,'serviceShow'])->name('service-show');
Route::get('/skill',[UserController::class,'skillShow'])->name('skill-show');
Route::POST('/store',[UserController::class,'store_data'])->name('store-data');