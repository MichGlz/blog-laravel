<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
    
        User::factory(10)->create();
    
        Category::factory(8)->create();
    
        Post::factory(50)->create();
    }
    
}
