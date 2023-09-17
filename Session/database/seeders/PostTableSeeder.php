<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            ['id'=>'1','title'=>'post one','description'=>'des one'],
            ['id'=>'2','title'=>'post one','description'=>'des two'],
            ['id'=>'3','title'=>'post one','description'=>'des three'],
        ];
        Post::insert($posts);
    }
}
