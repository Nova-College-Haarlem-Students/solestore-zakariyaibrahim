<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SneakerController;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/over', function () {
    return view('over');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brands/{brand}', [BrandController::class, 'show']);

Route::get('/sneakers', [SneakerController::class, 'index']);
Route::get('/sneakers/{sneaker}', [SneakerController::class, 'show']);