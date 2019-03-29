<?php

use Illuminate\Database\Seeder;
use App\Bbs;

class BbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <=10; $i++){
            $post = new Bbs;
            $post->title = 'タイトル'.$i;
            $post->body = '本文'.$i;
            $post->save();
        }
    }
}
