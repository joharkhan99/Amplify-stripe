<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home
Route::get('/', [StripeController::class, 'products'])->name('home');

// auth
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// stripe
// Route::get('/products', [StripeController::class, 'products'])->name('products');
Route::get('/checkout/{product_id}/{price_id}', [StripeController::class, 'createCheckoutSession'])->name('checkout');
Route::get('/checkout-completed/{product_id}/{price_id}', [StripeController::class, 'checkoutCompleted'])->name('checkoutCompleted');
