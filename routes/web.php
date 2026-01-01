<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/posts', [PostController::class, 'index']);
