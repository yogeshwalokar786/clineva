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
Route::post('/careers/apply', [PageController::class, 'submitApplication'])->name('careers.apply');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-standard', [PageController::class, 'blog']);
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/blog/{article}', [PageController::class, 'blogDetails'])->name('blog.show');

// Admin Authentication & Console
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin Guest / Login
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');

    // Protected Admin Routes
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [AdminDashboardController::class, 'index']);

        // Job Postings Management
        Route::resource('jobs', \App\Http\Controllers\Admin\JobPostingController::class)->except(['show']);
        Route::post('jobs/{job}/toggle', [\App\Http\Controllers\Admin\JobPostingController::class, 'toggle'])->name('jobs.toggle');

        // Job Applications Management
        Route::get('applications', [\App\Http\Controllers\Admin\JobApplicationController::class, 'index'])->name('applications.index');
        Route::get('applications/{application}', [\App\Http\Controllers\Admin\JobApplicationController::class, 'show'])->name('applications.show');
        Route::get('applications/{application}/resume', [\App\Http\Controllers\Admin\JobApplicationController::class, 'resume'])->name('applications.resume');
        Route::post('applications/{application}/status', [\App\Http\Controllers\Admin\JobApplicationController::class, 'updateStatus'])->name('applications.status');
        Route::delete('applications/{application}', [\App\Http\Controllers\Admin\JobApplicationController::class, 'destroy'])->name('applications.destroy');

        // Contact Inquiries Management
        Route::get('inquiries', [\App\Http\Controllers\Admin\ContactInquiryController::class, 'index'])->name('inquiries.index');
        Route::get('inquiries/{inquiry}', [\App\Http\Controllers\Admin\ContactInquiryController::class, 'show'])->name('inquiries.show');
        Route::post('inquiries/{inquiry}/status', [\App\Http\Controllers\Admin\ContactInquiryController::class, 'updateStatus'])->name('inquiries.status');
        Route::delete('inquiries/{inquiry}', [\App\Http\Controllers\Admin\ContactInquiryController::class, 'destroy'])->name('inquiries.destroy');

        Route::match(['get', 'post'], '/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});

// Legacy / Shortcut Auth Redirection
Route::redirect('/login', '/admin/login')->name('login');
