<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


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
    // with itu digunakan untuk eager loading relasi
    // jadi ketika kita mengambil data post, kita juga mengambil data category dan authornya
    // ini mengurangi jumlah query yang dilakukan ke database
    // jika tidak menggunakan with, maka akan ada query tambahan untuk mengambil data category dan author
    // ini bisa menyebabkan N+1 problem jika ada banyak post
    $posts = Post::latest()->get();

    return view('posts', ['title' => 'Blog Posts', 'posts' => $posts]);
})->name('blog');

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);

    return view('post', [
        'title' => $post['title'] ?? 'Post Not Found',
        'post' => $post
    ]);
})->name('post');

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load(['category', 'author']);

    return view('posts', [
        'title' => 'Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
})->name('post');

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load(['category', 'author']);


    return view('posts', [
        'title' => 'Articles in ' . $category->name,
        'posts' => $category->posts
    ]);
})->name('post');
