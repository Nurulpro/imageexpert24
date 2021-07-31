<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard');



Route::get('/greeting', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::post('subscriber', 'App\Http\Controllers\SubscriberController@storesubscriber');


Route::get('storecontactus', 'App\Http\Controllers\ContactController@storecontactus');

Route::get('/clippingpath', function () {
    return view('clippingpath');
});

// admin route

Route::get('/admin', function () {
    return view('admin.adminlayouts');
});

Route::get('/SubscriberList', function () {
    return view('admin.subscriber');
});

Route::get('/ContactForms', function () {
    return view('admin.ContactForms');


});

Route::get('/freetrial', function () {
    return view('freetrial');


   
});
