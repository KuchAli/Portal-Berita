<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\AuthController;


Route::prefix('admin')
    ->middleware(['auth'])     // optional
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Resource controllers (opsional)
        Route::resource('/articles', ArticleController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/comments', CommentController::class);
        Route::resource('/users', UserController::class);
        Route::resource('/settings', SettingController::class);




        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
            
        
    });
