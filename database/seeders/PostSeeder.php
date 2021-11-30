<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            $post = new Post();
            $post->fill([
                'title' => Str::random(30),
                'meta_description' => Str::random(100),
                'body' => Str::random(300),
                "view" => rand(0, 5000)
            ])->save();
        }
    }
}
