<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Detail;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);
Route::resource('clients', UserController::class);
Route::resource('details', DetailController::class);
