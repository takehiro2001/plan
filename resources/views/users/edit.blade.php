@extends('layouts.app') @section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ユーザ編集</div>
        <div class="card-body">
          <!-- 重要な箇所ここから -->
          <form action="/users/{{ $user->id }}/edit" method="POST">
            @csrf
            @method('PUT')
            <p>ID: {{ $user->id }}</p>
            <input type="hidden" name="user[id]" value="{{ $user->id }}" />
            <p>名前</p>
            <input type="text" name="user[name]" value="{{ $user->name }}" />
            <p>目標</p>
            <input type="text" name="user[goal_message]" value="{{ $user->goal_message }}" /><br />
            <p>トレーニング歴</p>
            <input type="text" name="user[training_history]" value="{{ $user->training_history }}" /><br />
            <input type="submit" value="更新" />
          </form>
          <!-- 重要な箇所ここまで -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
