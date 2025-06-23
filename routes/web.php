<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Welcome to Our Website']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
})->name('contact');

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Posts', 'posts' => Post::all()]);
})->name('blog');

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);

    return view('post', [
        'title' => $post['title'] ?? 'Post Not Found',
        'post' => $post
    ]);
})->name('post');
