<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="col-md-3">
        {!! link_to_route('posts.index', '掲示板') !!}
    </div>
    <div class="col-md-3 offset-md-6">
        {!! link_to_route('posts.create', '新規作成') !!}
    </div>
</nav>