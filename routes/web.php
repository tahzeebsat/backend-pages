<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/mobile', function () {
    return view('pages.mobile.order-dashboard');
});