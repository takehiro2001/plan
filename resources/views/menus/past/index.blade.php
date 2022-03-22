@extends('layouts.app')　
@section('content')    
    <header>
        <a href="/">return</a>
        <h1>Past Data</h1>
    </header>
            <div class='past'>
        @foreach ($menus as $menu)
            <div class='menu'>
                <p class='date'>{{$menu->date}}</p>
                 <a href="/menus/{{$menu->id}}">{{$menu->muscle}}</a>
                <p class='body'>{{ $menu->body }}</p>
            </div>
        @endforeach
            </div>
 @endsection
