<?php

use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('admin.home');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('details', DetailController::class)->names('admin.details');
Route::resource('products', ProductController::class)->names('admin.products');
