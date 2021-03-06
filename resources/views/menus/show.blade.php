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
        <p class="edit">[<a href="/menus/{{ $menu->id }}/edit">edit</a>]</p>
        <form action="/menus/{{ $menu->id }}" id="form_{{ $menu->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button> 
        </form>
        <h1 class="muscle">
            {{ $menu->muscle }}
        </h1>
        <div class="body">
            <div class="content">
                <h3>本文</h3>
                <p>{{ $menu->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">return</a>
        </div>
    @endsection
    </body>
</html>
