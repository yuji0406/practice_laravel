@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
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
    <a href="{{ route('hello/add') }}">Addページ</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
