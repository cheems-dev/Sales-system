<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('clients.store', [UserController::class, 'store'])->name('clients.store');

Route::resource('clients', UserController::class);
Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
        Route::resource('products', ProductController::class);

        Route::resource('clients', UserController::class);
        Route::resource('details', DetailController::class);
    }
);

require __DIR__ . '/auth.php';
