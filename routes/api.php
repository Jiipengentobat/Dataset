<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Rute resourceful untuk API Produk
Route::apiResource('products', ProductController::class);
