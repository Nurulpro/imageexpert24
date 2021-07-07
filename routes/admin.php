<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactusController;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::post('/contact-form', [App\Http\Controllers\ContactusController::class, 'contactForm'])->name('contact-form');

// Route::post('/contact-form', [App\Http\Controllers\ContactusController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/', function () {
    return view('welcome');
});
