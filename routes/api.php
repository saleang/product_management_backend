<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;

Route::get('products/search/query', [ProductController::class, 'search']);
Route::get('products/barcode/{barcode}', [ProductController::class, 'searchByBarcode']);


Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
