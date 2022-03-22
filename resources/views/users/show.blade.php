@extends('layouts.app')　
@section('content')  
<header>
    <h1>Share Muscle</h1>
</header>
<body>
    <a href="/users/{{$user->id}}/edit">編集画面</a>
    <h2 class="title">プロフィール</h2>
    <div class="content">
        <p>名前:{{ $user->name }}</p>
        <p>メールアドレス:{{ $user->email }}</p>
        <p>目標:{{ $user->goal_message }}</p>
        <p>トレーニング歴:{{ $user->training_history }}</p>
    </div>
<div class="footer">
    <a href="/">return</a>
</div>
</body>
@endsection