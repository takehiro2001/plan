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
            @foreach ($menus as $menu)
            <div class='menu'>
                 <table border="1" >
                <tr>
                  <th colspan="7">Training Plan</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Monday</td>
                  <td>Tuesday</td>
                  <td>Wednesday</td>
                  <td>Thursday</td>
                  <td>Friday</td>
                  <td>Saturday</td>
                  <td>Sunday</td>
                </tr>
                <tr>
                  <td>{{Auth::user()->name}}</td>
                  <td></td>
                  <td>Tuesday</td>
                  <td>Wednesday</td>
                  <td>Thursday</td>
                  <td>Friday</td>
                  <td>Saturday</td>
                  <td>Sunday</td>
                </tr>
              </table>
            </div>
            @endforeach
        </div>
        @endsection
    </body>
</html>
