<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [ConferenceController::class, 'home'])->name('home');
Route::get('/about', [ConferenceController::class, 'about'])->name('about');
Route::get('/committee', [ConferenceController::class, 'committee'])->name('committee');
Route::get('/call-for-paper', [ConferenceController::class, 'callForPaper'])->name('call-for-paper');
Route::get('/paper-submission', [ConferenceController::class, 'paperSubmission'])->name('paper-submission');
Route::get('/registration', [ConferenceController::class, 'registration'])->name('registration');
Route::get('/contact', [ConferenceController::class, 'contact'])->name('contact');

// No Admin Routes (Hardcoded Management)

