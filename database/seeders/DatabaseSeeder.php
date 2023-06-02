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

        User::factory(4)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::factory(10)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
