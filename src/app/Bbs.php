<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Bbs extends Model
{

    //複数代入による予期せぬ代入が起こることの防止
    protected $fillable = ['title', 'body'];

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'bbs';

    /**
     * Bbsモデルから全ての投稿を取り出してくる処理
     */
    public function getAllPost()
    {
        
    }
}
