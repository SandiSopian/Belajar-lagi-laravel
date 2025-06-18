<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
    return view('posts', ['title' => 'Blog Posts', 'posts' => [
        [
            'id' => 1,
            'slug' => 'first-blog-post',
            'title' => 'First Blog Post',
            'author' => 'John Doe',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit iusto possimus harum, voluptates architecto voluptatibus ratione doloremque deserunt adipisci, soluta fugiat quisquam nemo, culpa nesciunt libero placeat reprehenderit optio.',
        ],
        [
            'id' => 2,
            'slug' => 'second-blog-post',
            'title' => 'Second Blog Post',
            'author' => 'Jane Smith',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit iusto possimus harum, voluptates architecto voluptatibus ratione doloremque deserunt adipisci, soluta fugiat quisquam nemo, culpa nesciunt libero placeat reprehenderit optio.',
        ],
        [
            'id' => 3,
            'slug' => 'third-blog-post',
            'title' => 'Third Blog Post',
            'author' => 'Alice Johnson',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit iusto possimus harum, voluptates architecto voluptatibus ratione doloremque deserunt adipisci, soluta fugiat quisquam nemo, culpa nesciunt libero placeat reprehenderit optio.',
        ],
    ]]);
})->name('blog');

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-blog-post',
            'title' => 'First Blog Post',
            'author' => 'John Doe',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit iusto possimus harum, voluptates architecto voluptatibus ratione doloremque deserunt adipisci, soluta fugiat quisquam nemo, culpa nesciunt libero placeat reprehenderit optio.',
        ],
        [
            'id' => 2,
            'slug' => 'second-blog-post',
            'title' => 'Second Blog Post',
            'author' => 'Jane Smith',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit iusto possimus harum, voluptates architecto voluptatibus ratione doloremque deserunt adipisci, soluta fugiat quisquam nemo, culpa nesciunt libero placeat reprehenderit optio.',
        ],
        [
            'id' => 3,
            'slug' => 'third-blog-post',
            'title' => 'Third Blog Post',
            'author' => 'Alice Johnson',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime fugit iusto possimus harum, voluptates architecto voluptatibus ratione doloremque deserunt adipisci, soluta fugiat quisquam nemo, culpa nesciunt libero placeat reprehenderit optio.',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => $post['title'] ?? 'Post Not Found',
        'post' => $post
    ]);
})->name('post');
