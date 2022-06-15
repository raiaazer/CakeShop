<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function(){
    Route::get('login', [LoginController::class,'showAdminLoginForm'])->name('admin.login');
});


Route::middleware('auth:admin')->group(function(){

    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('category',CategoryController::class);

    Route::resource('product',ProductController::class);

});


