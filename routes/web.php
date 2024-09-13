<?php

use Illuminate\Support\Facades\Route;

Route::get('/mobile-order-dashboard', function () {
    return view('pages.mobile.order-dashboard');
});
Route::get('/operation-dashboard', function () {
    return view('pages.operations-dashboard');
});
Route::get('/bank-transfer', function () {
    return view('pages.bank-transfer-dashboard');
});
Route::get('/reserve-car', function () {
    return view('pages.reserve-car-dashboard');
});
Route::get('/order-dashboard', function () {
    return view('pages.order-dashboard');
});
Route::get('/', function () {
    return view('pages.dashboard');
});
