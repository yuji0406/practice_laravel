@extends('layouts.helloapp')
<style>
    .pagination { font-size: 10pt; }
    .pagination li { display: inline-block; }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }

</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @if (Auth::check())
        <p>USER: {{ $user->name . '(' . $user->email . ')' }}</p>
    @else
        <p>※ログインしてません(<a href="/login">ログイン</a> | <a href="/registter">登録</a>)</p>
    @endif

    <table>
        <tr>
            <th><a href="/hello?sort=name">Name</a></th>
            <th><a href="/hello?sort=mail">mail</a></th>
            <th><a href="/hello?sort=age">age</a></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
                <td><a href="{{ route('hello/edit', $item->id) }}">編集</a></td>
                <td><a href="{{ route('hello/show', $item->id) }}">詳細</a></td>
                <td><a href="{{ route('hello/del', $item->id) }}">削除</a></td>
            </tr>
            @endforeach
        </table>
        {{ $items->appends(['sort' => $sort])->links() }}
        <a href="{{ route('hello/add') }}">Addページ</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
