<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>掲示板</h1>
        <form action="">
            <div>
                <h2>タイトル</h2>
                <input type="text">
            </div>
            <div>
                <h2>本文</h2>
                <textarea type="text"></textarea>
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
        <h2>一覧</h2>
    </body>
</html>
