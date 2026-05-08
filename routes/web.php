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

// Admin Routes (Password protected area recommended)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Marquees
    Route::get('/marquees', [AdminController::class, 'marquees'])->name('marquees');
    Route::post('/marquees', [AdminController::class, 'storeMarquee'])->name('marquees.store');
    Route::get('/marquees/{id}/edit', [AdminController::class, 'editMarquee'])->name('marquees.edit');
    Route::post('/marquees/{id}', [AdminController::class, 'updateMarquee'])->name('marquees.update');
    Route::delete('/marquees/{id}', [AdminController::class, 'deleteMarquee'])->name('marquees.delete');

    // Settings (View Count)
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('settings.update');

    // Committee
    Route::get('/committee', [AdminController::class, 'committee'])->name('committee');
    Route::get('/committee/create', [AdminController::class, 'createCommittee'])->name('committee.create');
    Route::post('/committee', [AdminController::class, 'storeCommittee'])->name('committee.store');
    Route::get('/committee/{id}/edit', [AdminController::class, 'editCommittee'])->name('committee.edit');
    Route::post('/committee/{id}', [AdminController::class, 'updateCommittee'])->name('committee.update');
    Route::delete('/committee/{id}', [AdminController::class, 'deleteCommittee'])->name('committee.delete');

    // Dates
    Route::get('/dates', [AdminController::class, 'dates'])->name('dates');
    Route::post('/dates', [AdminController::class, 'storeDate'])->name('dates.store');
    Route::get('/dates/{id}/edit', [AdminController::class, 'editDate'])->name('dates.edit');
    Route::post('/dates/{id}', [AdminController::class, 'updateDate'])->name('dates.update');
    Route::delete('/dates/{id}', [AdminController::class, 'deleteDate'])->name('dates.delete');

    // Pages
    Route::get('/pages', [AdminController::class, 'pages'])->name('pages');
    Route::post('/pages/{id}', [AdminController::class, 'updatePage'])->name('pages.update');
});
