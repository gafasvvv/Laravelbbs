<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //複数代入による予期せぬ代入が起こることの防止
    protected $fillable = ['title', 'body'];

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'posts';
    
}
