<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Comment::truncate();
        //User::truncate();
        //Post::truncate();

        User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        User::factory(5)->create();

        Post::factory(30)->create();

        Category::factory(5)->create();

        Comment::factory(5)->create();
    }
}
