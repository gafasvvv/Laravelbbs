{{-- layoutの継承 --}}
@extends('layout')

@section('content')
    <h1>掲示板</h1>
        {!! Form::open() !!}
            <div>
                {!! Form::label('title', 'タイトル') !!}
                {!! Form::text('title', null) !!}
            </div>
            <div>
                {!! Form::label('body', '本文') !!}
                {!! Form::text('body', null) !!}
            </div>
            <div>
                {!! Form::submit('追加') !!}
            </div>
        {!! Form::close() !!}
    <h2>一覧</h2>
    {{-- $postsが空かどうかを確認 --}}
    @if(is_array($posts))
        @foreach($posts as $post)
            <div>
                <p>{{ $post->title }}</p>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach
    @endif
@endsection