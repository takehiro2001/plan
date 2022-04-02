@extends('layouts.app')　
@section('content')
<header>
    <h1>Share Muscle</h1>
</header>
<body>
    <h2 class="title">ユーザーリスト</h2>
    <table>
        <tr><th>ユーザーID</th><th>名前</th></tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td><a href='{{route('mypage', ['user' => $user->id])}}'>{{ $user->name }}</a></td>
        </tr>
    @endforeach
    </table>
<div class="footer">
    <a href="/">return</a>
</div>
@endsection

