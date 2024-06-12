<?php

use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;


Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
        return view('about-us', ["title" => "About"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

Route::get('/products', function () {
    return view('products', ["title" => "Products", 'products' => Product::all()]);
});

// Route::get('/images', [ImageController::class, 'index']);
// Route::get('/images/create', [ImageController::class, 'create']);
// Route::post('/images', [ImageController::class, 'store']);
