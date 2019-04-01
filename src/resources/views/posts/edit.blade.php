@extends('app.layout')

@section('content')
    <h2>{!! link_to_route('posts.index', '掲示板') !!}</h2>
    <h3>編集</h3> 
    {!! Form::model($post, ['route' => ['posts.update',$post->id], 'method' => 'put']) !!}
        <div>
            {!! Form::label('title', 'タイトル') !!}
        </div>
        <div>
            {!! Form::text('title', null) !!}
        </div>
        <div>
            {!! Form::label('body', '本文') !!}
        </div>
        <div>
            {!! Form::textarea('body', null) !!}
        </div>
        <div>
            {!! Form::submit('更新') !!}
        </div>
    {!! Form::close() !!}
@endsection