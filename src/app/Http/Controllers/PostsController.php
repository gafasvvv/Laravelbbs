<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
     
    /**
     * 投稿の一覧を表示する
     * @return View
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * 新規に投稿する
     * @return View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * 新規作成した投稿をストレージに保存する
     * @return View
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:30',
            'body' => 'required|max:230'
        ]);
        
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/');
    }

    /**
     * 投稿を編集する
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        return view('posts.edit',[
            'post' => $post
        ]);
    }

    /** 
     * ストレージに編集した投稿を保存する
     * @param int $id
     * @return View
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:30',
            'body' => 'required|max:230'
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/');
    }

    /**
     * 投稿を削除する
     * @param int $id
     * @return View
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }
}
