<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/user')->as('user.')->group(function() {
    Route::post('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
    Route::post('/request_otp', [App\Http\Controllers\UserController::class, 'request_otp'])->name('request_otp');
    Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
    Route::post('/add_to_cart', [App\Http\Controllers\UserController::class, 'add_to_cart'])->name('add_to_cart');
    Route::post('/update_cart_quantity', [App\Http\Controllers\UserController::class, 'update_cart_quantity'])->name('update_cart_quantity');
    Route::post('/drop_cart', [App\Http\Controllers\UserController::class, 'drop_cart'])->name('drop_cart');
    Route::post('/new_password', [App\Http\Controllers\UserController::class, 'new_password'])->name('new_password');
});

Route::prefix('/products')->as('product.')->group(function() {
    Route::get('/{product}', [App\Http\Controllers\ProductController::class, 'view'])->name('view');
});

Route::prefix('/checkout')->as('checkout.')->group(function() {
    Route::post('/create', [App\Http\Controllers\CheckoutController::class, 'create'])->name('create');
    Route::post('/create_multiple', [App\Http\Controllers\CheckoutController::class, 'create_multiple'])->name('create_multiple');
    Route::get('/single/{order}', [App\Http\Controllers\CheckoutController::class, 'single'])->name('single');
});

Route::prefix('/news')->as('news.')->group(function() {
    Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('index');
    Route::get('/{news}', [App\Http\Controllers\NewsController::class, 'single'])->name('single');
});

Route::prefix('/promotion')->as('promotion.')->group(function() {
    Route::get('/', [App\Http\Controllers\PromotionController::class, 'index'])->name('index');
    Route::get('/{promotion}', [App\Http\Controllers\PromotionController::class, 'single'])->name('single');
});

Route::get('/cart', [App\Http\Controllers\UserController::class, 'load_cart'])->name('load_cart');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/order/{status?}/{page?}', [App\Http\Controllers\UserController::class, 'order'])->name('order');
Route::get('/change_password', [App\Http\Controllers\UserController::class, 'change_password'])->name('change_password');

Route::get('/order_history/{status}/{page}', [App\Http\Controllers\UserController::class, 'order_history'])->name('order_history');