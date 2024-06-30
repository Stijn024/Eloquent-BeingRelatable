<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        $postFactory = Post::factory(3)->hasAttached($tags);

        User::factory(5)
             ->has(Profile::factory())
             ->has($postFactory)
             ->create();
    }
}
