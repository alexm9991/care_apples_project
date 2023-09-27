<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\Service_TypeController;
use App\Http\Controllers\Service_CategoryController;
use App\Http\Controllers\Service_Type_CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('municipality', MunicipalityController::class);
Route::resource('apple', AppleController::class);
Route::resource('service_type', Service_TypeController::class);
Route::resource('service_category', Service_CategoryController::class);
Route::resource('service_type_category', Service_Type_CategoryController::class);


