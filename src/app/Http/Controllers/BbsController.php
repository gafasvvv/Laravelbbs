<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    /**
     * 投稿の一覧を表示する
     * @return View
     */
    public function index()
    {
        return view('top');
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
