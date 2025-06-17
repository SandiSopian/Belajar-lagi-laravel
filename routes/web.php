<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Welcome to Our Website']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
})->name('contact');

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Posts', 'posts' => []]);
})->name('blog');
