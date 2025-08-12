<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AppointmentController;

Route::get('/home', function() {

    return redirect()->route('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::controller(ContactController::class)->group(function() {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'post')->name('contact.post');
});

Route::controller(ProjectController::class)->group(function() {
    Route::get('/projects', 'index')->name('projects');
    Route::get('/projects/{project}', 'show')->name('projects.show');
});

Route::controller(ServiceController::class)->group(function() {
    Route::get('/services', 'index')->name('services');
    Route::get('/services/{service}', 'show')->name('services.show');
});


Route::get('/change-language/{locale}', function ($locale = 'es') {
    App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
})->name('change-language');

Route::prefix('quotes')->group(function () {
    Route::get('/request', [QuoteController::class, 'create'])->name('quotes.create');
    Route::post('/request', [QuoteController::class, 'store'])->name('quotes.store');
});

//Route::prefix('appointments')->group(function () {
//    Route::get('/book', [AppointmentController::class, 'create'])->name('appointments.create');
//    Route::post('/book', [AppointmentController::class, 'store'])->name('appointments.store');
//});

