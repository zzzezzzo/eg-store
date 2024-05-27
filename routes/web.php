<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/************* Products Routes ***************/
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/trash', [ProductController::class, 'index_trash']);
Route::get('/products/{id}/restore', [ProductController::class, 'restore']);
Route::delete('/products/{id}/delete_forever', [ProductController::class, 'delete_permanently']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
/************* Products Routes ***************/

/************* Categories Routes ***************/
Route::get('/categories', [CategoryController::class, 'index'])->name(name:'categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name(name:'categories.store');
Route::get('/categories/create', [CategoryController::class, 'create'])->name(name:'category.create');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name(name:'categories.show');
Route::get('/categories/{id}/edit',[CategoryController::class, 'edit'])->name(name:'categories.edit');
Route::put('/categories/{id}',[CategoryController::class, 'update'])->name(name:'categories.update');
/************* Categories Routes ***************/

/************* Customers Routes ***************/
Route::get('/customers', [CustomerController::class, 'index']);
/************* Customers Routes ***************/
