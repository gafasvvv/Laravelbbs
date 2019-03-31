@extends('layout')

@section('content')
    <h2>{!! link_to_route('posts.index', '掲示板') !!}</h2> 
    {!! Form::open(['route' => 'posts.store']) !!}
        <h3>新規投稿</h3>
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
            {!! Form::submit('投稿') !!}
        </div>
    {!! Form::close() !!}
@endsection