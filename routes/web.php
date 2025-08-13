<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/work', function () {
    return view('work');
});

// Guest Routes - only accessible when NOT logged in
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [AuthenticationController::class, 'showRegistrationForm'])->name('register');
});

// Authentication Routes - accessible to all
Route::post('/login', [AuthenticationController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');


// Admin Dashboard & CRUD Routes (Protected by Auth Middleware)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('admin.analytics');

    // CRUD routes for portfolio sections
    Route::resource('projects', App\Http\Controllers\ProjectsController::class);
    Route::resource('skills', App\Http\Controllers\SkillsController::class);
    Route::resource('educations', App\Http\Controllers\EducationsController::class);
    Route::resource('achievements', App\Http\Controllers\AchievementsController::class);
    Route::resource('experiences', App\Http\Controllers\ExperiencesController::class);
    Route::resource('personal-details', App\Http\Controllers\PersonalDetailsController::class);
    Route::resource('infos', App\Http\Controllers\InfosController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

