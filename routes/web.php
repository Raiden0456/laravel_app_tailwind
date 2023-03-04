<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::post('/products/{product}', [ProductsController::class, 'update'])->name('products.update');

require __DIR__.'/auth.php';
