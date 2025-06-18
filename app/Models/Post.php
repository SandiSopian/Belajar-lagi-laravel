<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
            ]
        ];
    }



    public static function find($slug): array
    {
        // Menggunakan callback untuk mencari post berdasarkan slug
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // Menggunakan arrow function untuk mencari post berdasarkan slug
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404); // Jika post tidak ditemukan, kembalikan null
        }

        return $post;
    }
}
