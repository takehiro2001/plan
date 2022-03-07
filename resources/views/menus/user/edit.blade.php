<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Plan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    @extends('layouts.app') @section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">ユーザ編集</div>
            <div class="card-body">
              <!-- 重要な箇所ここから -->
              <form action=""
                method="post">
                @csrf
                <p>ID: {{ $user->id }}</p>
                <input type="hidden" name="id" value="{{ $user->id }}" />
                <p>名前</p>
                <input type="text" name="name" value="{{ $user->name }}" />
                <p>メール</p>
                <input type="text" name="email" value="{{ $user->email }}" /><br />
                <input type="submit" value="更新" />
              </form>
              <!-- 重要な箇所ここまで -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    </body>
</html>