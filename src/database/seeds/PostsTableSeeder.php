<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <=10; $i++){
            $post = new Post;
            $post->title = 'タイトル'.$i;
            $post->body = '本文'.$i;
            $post->save();
        }
    }
}
