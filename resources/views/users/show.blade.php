@extends('layouts.app')　
@section('content')  
<header>
    <h1>Share Muscle</h1>
</header>
<body>
    @if(Auth::id() == $user->id)
    <a href="/users/{{$user->id}}/edit">編集画面</a>
    @endif
    <h2 class="title">プロフィール</h2>
    <div class="content">
        @if(Auth::id() != $user->id)
              @if($user->is_followed_by_auth_user() == true)
                <a href='/users/{{$user->id}}/unfollow' class="btn btn-secondary btn-sm">フォロー解除</a>
              @else    
                <a href='/users/{{$user->id}}/follow' class="btn btn-secondary btn-sm">フォロー</a>
              @endif    
        @endif  
        <p>メールアドレス:{{ $user->email }}</p>
        <p>目標:{{ $user->goal_message }}</p>
        <p>トレーニング歴:{{ $user->training_history }}</p>
    </div>
<div class="footer">
    <a href="/">return</a>
</div>
</body>
@endsection