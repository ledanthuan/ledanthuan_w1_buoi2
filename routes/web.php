<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\frontend\LoginController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('nguoi-dung', [UserController::class, 'index']);
Route::get('san-pham', [ProductController::class, 'index']);
Route::get('chi-tiet-san-pham/{slug}', [ProductController::class, 'product_detail']);
Route::get('lien-he', [ContactController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);
Route::get('login', [LoginController::class, 'index']);


