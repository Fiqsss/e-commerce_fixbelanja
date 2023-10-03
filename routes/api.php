<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/product', [ProductController::class, 'index']);