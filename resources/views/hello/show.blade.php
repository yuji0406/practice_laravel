@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $item->name }}</td>
        </tr>
        <tr>
            <th>Mail</th>
            <td>{{ $item->mail }}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{ $item->age }}</td>
        </tr>
    </table>
    <a href="{{ route('/hello') }}">戻る</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
