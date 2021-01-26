<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ExampleController::class, 'index']);
Route::get('/example1', [ExampleController::class, 'example1']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/add', [CategoryController::class, 'add']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);

Route::get('/suppliers', [SupplierController::class, 'index']);
Route::get('/suppliers/add', [SupplierController::class, 'add']);
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/add', [ProductController::class, 'add']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);