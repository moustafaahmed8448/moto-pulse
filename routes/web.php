<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome and dashboard routes
Route::get('/welcome', function () {
    return view('welcome');
});

// Home route (public)
Route::get('/', function () {
    return view('home');
});

// Static pages (public)
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/shipping', 'shipping');
Route::view('/shop', 'shop');
Route::view('/terms', 'terms');

// Product routes - accessible publicly
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


// Product creation route (Authenticated users only)
Route::middleware('auth')->group(function () {
    // Product management routes (authenticated only)
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{product}/delete-image/{index}', [ProductController::class, 'deleteImage'])->name('products.deleteImage');
});
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// Authenticated routes for profile management
Route::middleware('auth')->group(function () {
    // Home route after login
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
