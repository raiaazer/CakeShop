<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\{HomeController,ProductsController};

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('product-details', function () {
    return view('theme.product-details');
})->name('product-detail');

Route::get('products', [ProductsController::class,'index'])->name('products');

Route::get('cart', function () {
    return view('theme.cart');
})->name('cart');

Route::get('checkout', function(){
    return view('theme.checkout');
})->name('checkout');

Route::get('order-tracking', function(){
    return view('theme.order-tracking');
})->name('order-tracking');

Route::get('order-complete', function(){
    return view('theme.order-complete');
})->name('order-complete');

Route::get('contact-us', function(){
    return view('theme.about-us');
})->name('contact_us');
