<?php

use Illuminate\Support\Facades\Route;

// Moiz motors start
Route::get('/moiz-motors-dashboard', function () {
    return view('pages.moiz-dashboard');
});
Route::get('/moiz-motors-orders', function () {
    return view('pages.moiz-orders');
});
// Moiz motors end
Route::get('/manual-shipping-list', function () {
    return view('pages.dashboard-manual-shippinglist');
});
Route::get('/mobile-order-dashboard', function () {
    return view('pages.mobile.order-dashboard');
});
Route::get('/mobile-dashboard', function () {
    return view('pages.mobile.dashboard');
});
Route::get('/mobile-reserve-car', function () {
    return view('pages.mobile.reserve-car-dashboard');
});
Route::get('/mobile-operations', function () {
    return view('pages.mobile.operations-dashboard');
});
Route::get('/mobile-sold-car', function () {
    return view('pages.mobile.sold-carsinfo-dashboard');
});
Route::get('/mobile-manual-shipping', function () {
    return view('pages.mobile.manual-ship-dashboard');
});
Route::get('/mobile-bank-transfer', function () {
    return view('pages.mobile.bank-transfer-dashboard');
});
Route::get('/operation-dashboard', function () {
    return view('pages.operations-dashboard');
});
Route::get('/inspection-report', function () {
    return view('pages.inspection.inspection-report');
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
Route::get('/sold-cars', function () {
    return view('pages.sold-cars-dashboard');
});
