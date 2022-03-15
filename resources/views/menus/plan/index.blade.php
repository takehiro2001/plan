
@extends('layouts.app')　
@section('content')
<header>
    <h1>Share Muscle</h1>
</header>
[<a href='/past'>Past Data</a>]
<div class='menus row'>
    @foreach($weekCalenderData as $val) 
        <div class='menu col'>
            <div class='date'><h5>{{$val['date']->format('m月d日')}}({{$val['week']}})</h5></div>
            @if($menus[(string)$val['date']->format('Y-m-d')])
                <p>{{$menus[(string)$val['date']->format('Y-m-d')]->muscle}}</p>
            @endif
        </div>
    @endforeach
</div>
[<a href='/menus/create'>create</a>]
@endsection

