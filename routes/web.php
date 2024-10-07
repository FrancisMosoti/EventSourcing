<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;

Route::post('/order', [OrderController::class, 'createOrder'])->name('order');
Route::get('/', [OrderController::class, 'home'])->name('home');
Route::get('/orders/{orderId}/payment', [OrderController::class, 'processPayment'])->name('pay');
Route::post('/orders/{orderId}/payment', [OrderController::class, 'processPayment'])->name('pay');
Route::get('/orders/{orderId}/ship', [OrderController::class, 'shipOrder'])->name('ship');
Route::post('/orders/{orderId}/ship', [OrderController::class, 'shipOrder'])->name('ship');

Route::get('/orders/{orderId}/history', [OrderController::class, 'showOrderHistory'])->name('home');