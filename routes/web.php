<?php

use App\Http\Controllers\HomeController;  // يجب تعديل هذا المسار

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index']);
