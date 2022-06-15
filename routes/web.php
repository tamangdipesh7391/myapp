<?php

use App\Http\Controllers\backend\HomeController as BackendHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
Route::group(['namespace' => 'frontend'], function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
});
Route::group(['namespace' => 'backend','prefix' => 'admin'], function () {
    Route::get('/',[BackendHomeController::class,'index'])->name('backhome');
});