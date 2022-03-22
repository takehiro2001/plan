@extends('layouts.app')　
@section('content')  
<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/menus/{{ $menu->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>muscle part</h2>
                <input type='text' name='menu[muscle]' value="{{ $menu->muscle }}">
            </div>
            <div class='content__body'>
                <h2>muscle memo</h2>
                <input type='text' name='menu[body]' value="{{ $menu->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
@endsection
