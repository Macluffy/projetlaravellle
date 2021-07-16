<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\IndexController;

Route::get('/index', [IndexController::class, 'index'])->name('index');
    

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/store', [StoreController::class, 'index'])->name('store');
