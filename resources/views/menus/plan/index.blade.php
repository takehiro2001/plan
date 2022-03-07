<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Plan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')　
        @section('content')
        <header>
            <h1>Share Muscle</h1>
        </header>
        [<a href='/past'>Past Data</a>]
        <div class='menus'>
            <div class='menu'>
                <table border="1" >
                    <tr>
                      <th colspan="8">Training Plan</th>
                    </tr>
                    <tr>
                        @foreach($weekCalenderData as $val) 
                            <th>
                                {{$val['day']}}({{$val['week']}})
                            </th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($menus as $val)
                        @if($val == [])
                        <th></th>
                        @else
                            <th>{{$val->muscle}}</th>
                        @endif    
                        @endforeach
                    </tr>
                </table>
            </div>
            [<a href='/menus/create'>create</a>]
        </div>
        @endsection
    </body>
</html>
