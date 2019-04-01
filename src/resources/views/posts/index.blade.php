@extends('app.layout')

@section('content')
    <h3 style="text-align:center;" class="mt-3 mb-3">投稿一覧</h3>
    <div class="container">
        <div class="row justify-content-center">
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <div class="col-md-4 mb-3">
                        <h4>{{$post->title}}</h4>
                        <p>{{$post->body}}</p>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                {!! link_to_route('posts.edit', '編集', ['id' => $post->id], ['class' => 'btn btn-outline-warning']) !!}
                                </div>
                                <div class="col-6">
                                {!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('削除', ['class' => 'btn btn-outline-danger']) !!}
                                {!! Form::close() !!}
                                </div>
                            </div>    
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
