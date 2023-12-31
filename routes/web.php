<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/add-to-cart', [OrderController::class, 'addToCart'])->name('order.addToCart');
Route::post('/remove-from-cart', [OrderController::class, 'removeFromCart'])->name('order.removeFromCart');
Route::post('/apply-voucher', [OrderController::class, 'applyVoucher'])->name('order.applyVoucher');
Route::post('/remove-voucher', [OrderController::class, 'RemoveVoucher'])->name('order.removeVoucher');
