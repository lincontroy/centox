<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/training-advocacy', [PageController::class, 'training'])->name('training');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');