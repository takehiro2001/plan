<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    @extends('layouts.app')　
    @section('content')  
    <!-- body内だけを表示しています。 -->
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/menus/{{ $menu->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>muscle part</h2>
                    <input type='text' name='menu[muscle]' value="{{ $menu->muscle }}">
                </div>
                <div class='content__body'>
                    <h2>muscle memo</h2>
                    <input type='text' name='menu[body]' value="{{ $menu->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
    @endsection
    </body>
</html>