<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        $post->title = 'Post 1';
        $post->content = 'Content 1';
        $post->categoria = 'Categoria 1';

        $post->save();

        $post = new Post();

        $post->title = 'Post 2';
        $post->content = 'Content 2';
        $post->categoria = 'Categoria 2';

        $post->save();
    }
}
