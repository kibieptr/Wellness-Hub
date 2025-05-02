<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MeditationController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\SessionController as AdminSessionController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\RegisterController;

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Registration
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Authentication
Auth::routes();

// User Area
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // User profile
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('profile', [UserController::class, 'updateProfile'])->name('profile.update');

    // Resources
   Route::resource('articles', ArticleController::class);
    Route::resource('meditations', MeditationController::class);
    Route::resource('forum', ForumController::class);
    Route::resource('sessions', SessionController::class);
    Route::resource('bookings', BookingController::class);
});

// Admin Area
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Admin resources
    Route::resource('articles', AdminArticleController::class);
    Route::resource('sessions', AdminSessionController::class);
    Route::resource('users', AdminUserController::class);
});