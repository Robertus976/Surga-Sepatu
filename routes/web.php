<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Home Route
Route::get('/', [HomeController::class, 'home'])->name('home');

// Dashboard Route
Route::get('/dashboard', [HomeController::class, 'home'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/myorders', [HomeController::class, 'myorders'])
    ->middleware(['auth', 'verified'])->name('dashboard');


// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__ . '/auth.php';

// Admin Dashboard Route (should be handled by AdminController)
Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);



// Route for Categories
Route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth', 'admin']);
Route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware(['auth', 'admin']);
Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware(['auth', 'admin']);
Route::post('update_category/{id}', [AdminController::class, 'update_category'])->middleware(['auth', 'admin']);

// Route for Products
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('add_product', [AdminController::class, 'add_product'])->name('add_product');
    Route::post('upload_product', [AdminController::class, 'upload_product'])->name('upload_product');
    Route::get('view_product', [AdminController::class, 'view_product'])->name('view_product');
    Route::get('hapus_product/{id}', [AdminController::class, 'hapus_product'])->name('hapus_product');
    Route::get('update_product/{id}', [AdminController::class, 'update_product'])->name('update_product');
    Route::post('edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
    Route::get('cari_product', [AdminController::class, 'search_product'])->name('search_product');

    // Routes for Banner
    Route::get('/view_banner', [AdminController::class, 'view_banner'])->name('view_banner');
    Route::get('/add_banner', [AdminController::class, 'add_banner'])->name('add_banner');
    Route::post('/upload_banner', [AdminController::class, 'upload_banner'])->name('upload_banner');
    Route::get('/update_banner/{id}', [AdminController::class, 'update_banner'])->name('update_banner');
    Route::post('/edit_banner/{id}', [AdminController::class, 'edit_banner'])->name('edit_banner');
    Route::get('/delete_banner/{id}', [AdminController::class, 'delete_banner'])->name('delete_banner');
});

// Product Details Route
Route::get('product_details/{id}', [HomeController::class, 'product_details']);
Route::get('/all-products', [HomeController::class, 'allProducts'])->name('all.products');
Route::get('/kenapakami', [HomeController::class, 'whyus'])->name('why');

Route::get('/contact', [HomeController::class, 'showForm'])->name('contact');
Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('send.email');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('add_cart/{id}', [HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);

Route::get('mycart', [HomeController::class, 'mycart'])->middleware(['auth', 'verified']);

Route::get('delete_cart/{id}', [HomeController::class, 'delete_cart'])
    ->middleware(['auth', 'verified'])
    ->name('delete.cart');

 Route::post('confirm_order', [HomeController::class, 'confirm_order'])->middleware(['auth', 'verified']);


//Order
Route::get('view_orders', [AdminController::class, 'view_order'])->middleware(['auth', 'admin']);
Route::get('dalam_perjalanan/{id}', [AdminController::class, 'dalam_perjalanan'])->middleware(['auth', 'admin']);
Route::get('terkirim/{id}', [AdminController::class, 'terkirim'])->middleware(['auth', 'admin']);

//Print PDF
Route::get('print_pdf/{id}', [AdminController::class, 'print_pdf'])->middleware(['auth', 'admin']);
Route::post('/confirm-order', [HomeController::class, 'confirm_order'])->name('confirm.order');
