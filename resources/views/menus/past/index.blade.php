<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Share Muscle</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="/">return</a>
            <h1>Past Data</h1>
        </header>
                <div class='past'>
            @foreach ($menus as $menu)
                <div class='menu'>
                    <p class='date'>{{$menu->date}}</p>
                    <h2 class='muscle'>{{ $menu->muscle }}</h2>
                    <p class='body'>{{ $menu->body }}</p>
                </div>
            @endforeach
                </div>
    </body>
</html>
