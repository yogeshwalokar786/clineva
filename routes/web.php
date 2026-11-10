<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes (Static Template Website)
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Core Company & Info Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/events-calendar', [PageController::class, 'events'])->name('events');

// Services
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/our-services', [PageController::class, 'services']);
Route::get('/services-details', [PageController::class, 'serviceDetails'])->name('services.details');

// Doctors
Route::get('/doctors', [PageController::class, 'doctors'])->name('doctors');
Route::get('/doctor-details', [PageController::class, 'doctorDetails'])->name('doctors.details');

// Contact & Appointments
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/make-an-appointment', [PageController::class, 'appointment'])->name('appointment');
Route::get('/appointment', [PageController::class, 'appointment']);

// Portfolio
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-details', [PageController::class, 'portfolioDetails'])->name('portfolio.details');

// Blog
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-standard', [PageController::class, 'blog']);
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blog.details');

// Shop & E-commerce
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/shop-details', [PageController::class, 'shopDetails'])->name('shop.details');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

// Auth
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/sign-up', [PageController::class, 'signup'])->name('signup');

// Specialized Clinic Templates
Route::get('/health-care', [PageController::class, 'healthCare'])->name('clinic.healthcare');
Route::get('/dental-clinic', [PageController::class, 'dentalClinic'])->name('clinic.dental');
Route::get('/child-care', [PageController::class, 'childCare'])->name('clinic.childcare');
Route::get('/eye-care', [PageController::class, 'eyeCare'])->name('clinic.eyecare');
