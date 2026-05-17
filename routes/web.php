<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/export-services', function () {
    return view('export-services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products/{slug}', function ($slug) {
    // For now, return a generic product detail view
    // In a real app, you'd fetch data from a DB
    return view('product-detail', ['slug' => $slug]);
});
