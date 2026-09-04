<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('jwt')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
});

//Route::apiResource('products', ProductController::class);
//Route::apiResource('kategori', KategoriController::class);