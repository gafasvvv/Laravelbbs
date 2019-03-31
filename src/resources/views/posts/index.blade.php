@extends('layout')

@section('content')
    <h2>{!! link_to_route('posts.index', '掲示板') !!}</h2> 
        {!! link_to_route('posts.create', '新規作成') !!}
    <h3>投稿一覧</h3>
        @foreach($posts as $post)
        <div>
            <h4>{{$post->title}}</h4>
            <p>{{$post->body}}</p>
            {!! link_to_route('posts.edit', '編集', ['id' => $post->id], ['class' => 'btn']) !!}
            {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除', ['class' => 'btn']) !!}
            {!! Form::close() !!}
        </div>
        @endforeach
@endsection
