<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/produk-details', [HomeController::class, 'produkDetails'])->name('produk-details');
Route::get('/cart-page', [HomeController::class, 'cart-page'])->name('cart-page');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dahsboard');
