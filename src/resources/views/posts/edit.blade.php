@extends('app.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center  mt-3 mb-3">
            {!! Form::model($post, ['route' => ['posts.update',$post->id], 'method' => 'put']) !!}
                <h3>編集</h3>
                <div class="col-ld-12 mb-3">
                    {!! Form::label('title', 'タイトル') !!}
                </div>
                <div class="col-ld-12 mb-3">
                    {!! Form::text('title', null) !!}
                </div>
                <div class="col-ld-12 mb-3">
                    {!! Form::label('body', '本文') !!}
                </div>
                <div class="col-ld-12 mb-3">
                    {!! Form::textarea('body', null) !!}
                </div>
                <div class="col-ld-12 mb-3">
                    {!! Form::submit('更新', ['class' => 'btn btn-outline-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection