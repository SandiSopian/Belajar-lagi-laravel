<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Health',
            'slug' => 'health',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
            'color' => 'yellow',
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => 'food',
            'color' => 'orange',
        ]);
    }
}
