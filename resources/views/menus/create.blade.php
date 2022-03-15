<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Create</title>
    </head>
    <body>
        @extends('layouts.app')　
        @section('content')
        <h1>Share Muscle</h1>
        <form action="/menus" method="POST">
            @csrf
             <div class="date">
                <h2>date</h2>
                <input type="date" name="menus[date]" placeholder="YYYY-MM-DD"/>
            </div>
            <div class="muscle">
                <h2>muscle part</h2>
                <input type="text" name="menus[muscle]" placeholder="muscle part"/>
            </div>
            <div class="body">
                <h2>memo</h2>
                <textarea name="menus[body]" placeholder="Chest press 10rep"></textarea>
            </div>
            <div class="user_id">
            {{ Auth::id() }}
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>