<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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
        Post::truncate();
        Category::truncate();
        User::truncate();
        $user = User::factory()->create([
            'name' => 'Jason-Kyle De Lara',
            'username' => 'jkdelara'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
        // Post::factory(5)->create();

        // $user1 = User::factory()->create();
        // $user2 = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);
        // $hobbies = Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies',
        // ]);

        // Post::create([
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'category_id' => $personal->id,
        //     'user_id' => $user1->id,
        // ]);

        // Post::create([
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'category_id' => $personal->id,
        //     'user_id' => $user1->id,
        // ]);

        // Post::create([
        //     'title' => 'My Work Post',
        //     'slug' => 'my-Work-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'category_id' => $work->id,
        //     'user_id' => $user2->id,
        // ]);

        // Post::create([
        //     'title' => 'My Hobby Post',
        //     'slug' => 'my-hobby-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     'category_id' => $hobbies->id,
        //     'user_id' => $user1->id,
        // ]);

    }
}
