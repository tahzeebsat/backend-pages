<?php

use Illuminate\Support\Facades\Route;

Route::get('/order-dashboard', function () {
    return view('pages.order-dashboard');
});
Route::get('/mobile-order-dashboard', function () {
    return view('pages.mobile.order-dashboard');
});
Route::get('/bank-transfer', function () {
    return view('pages.bank-transfer-dashboard');
});
Route::get('/reserve-car', function () {
    return view('pages.reserve-car-dashboard');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});