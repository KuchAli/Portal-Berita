<?php

use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopulerController;
use App\Http\Controllers\TerbaruController;
use App\Http\Controllers\ArticleController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/populer', [PopulerController::class, 'index'])->name('populer');
Route::get('/terbaru', [TerbaruController::class, 'index'])->name('terbaru');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('article.detail');



Route::post('/article/{article}/comment', [CommentController::class, 'store'])
    ->middleware('auth')
    ->name('article.comment');

Route::get('/category/{slug}', [HomeController::class, 'categoryShow'])->name('category.show');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');



// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





require __DIR__.'/admin.php';