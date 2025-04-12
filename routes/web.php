<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function() {
    return redirect()->route('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function() {
    return view('about');
})->name('about');

Route::get('contact', function() {
    return view('contact');
})->name('contact');

Route::get('services', function() {
    return view('services');
})->name('services');

Route::get('services/{id}', function($id) {
    return view('service-show', ['id' => $id]);
})->name('service-show');

Route::get('projects', function() {
    $directory = public_path('assets/images/project-images');

    $files = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

    $images = array_map('basename', $files);
    return view('projects', ['images' => $images]);
})->name('projects');
