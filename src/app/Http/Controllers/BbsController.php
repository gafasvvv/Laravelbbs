<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bbs;

class BbsController extends Controller
{
     //コントローラーでバリデーションチェックする

    /**
     * 投稿の一覧を表示する
     * @return View
     */
    public function index()
    {
        $bbs = new Bbs;
        $posts = $bbs->getAllPost();
        
        return view('top', ['posts' => $posts]);
    }

    /**
     * 新規に投稿する
     * @return View
     */
    public function create()
    {
        
    }

    /**
     * 投稿を編集する
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        
    }

    /**
     * 投稿を削除する
     * @param int $id
     * @return View
     */
    public function delete($id)
    {
        
    }

}
