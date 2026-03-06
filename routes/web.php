<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "<h1>About this page</h1>";
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/show', function () {
    $data = Product::all();
    return view('index', ['data' => $data]);
});

Route::get('/products', [ProductController::class, 'show']);