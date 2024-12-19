<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome and dashboard routes
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (middleware auth)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Static pages
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/shipping', 'shipping');
Route::view('/shop', 'shop');
Route::view('/terms', 'terms');

// Home route
Route::get('/', function () {
    return view('home');
});

// Product routes - using resource route for convenience
Route::resource('products', ProductController::class)->except([
    'edit',
    'update',
    'destroy'
]);

// This will define the following routes:
// GET /products -> index (Listing products)
// GET /products/create -> create (Create a new product form)
// POST /products -> store (Store a new product)
// GET /products/{product} -> show (View a single product)
