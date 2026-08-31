<?php

use App\Http\Controllers\Admin\ContactFormController as AdminContactFormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubscriberController as AdminSubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Public marketing pages

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/clippingpath', function () {
    return view('clippingpath');
});

Route::get('/about-us', function () {
    return view('AboutUs');
});

Route::get('/TermsOfConditions', function () {
    return view('TermsandConditions');
});

Route::get('/PrivacyPolicy', function () {
    return view('PrivacyPolicy');
});

// Contact / free trial / subscriber forms

Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');
Route::post('/FreeTrial', [ContactController::class, 'storeFreeTrial'])->name('FreeTrial.store');
Route::post('/subscriber', [SubscriberController::class, 'storesubscriber'])->name('subscriber.store');

// Admin panel (auth-gated)

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/SubscriberList', [AdminSubscriberController::class, 'index'])->name('admin.subscribers.index');
    Route::delete('/SubscriberList/{subscriber}', [AdminSubscriberController::class, 'destroy'])->name('admin.subscribers.destroy');

    Route::get('/ContactForms', [AdminContactFormController::class, 'index'])->name('admin.contact-forms.index');
    Route::delete('/ContactForms/{contact}', [AdminContactFormController::class, 'destroy'])->name('admin.contact-forms.destroy');
});
