<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes (Clineva Research Laboratories)
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Core Company & Info Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about-us', [PageController::class, 'about']);

// Services
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/our-services', [PageController::class, 'services']);
Route::get('/services-details/{service?}', [PageController::class, 'serviceDetails'])->name('services.details');
Route::get('/services/{service}', [PageController::class, 'serviceDetails']);

// Careers & Contact
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/career', [PageController::class, 'careers']);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-standard', [PageController::class, 'blog']);
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blog.details');

// Admin Authentication & Dashboard
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin Guest / Login
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');

    // Protected Admin Routes (Dashboard & Logout)
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [AdminDashboardController::class, 'index']);
        Route::match(['get', 'post'], '/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});

// Legacy / Shortcut Auth Redirection
Route::redirect('/login', '/admin/login')->name('login');
