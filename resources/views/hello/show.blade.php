@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
@if ($items != null)
    @foreach ($items as $item)
        <table width="400px">
            <tr>
                <th width="50px">ID</th>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <th width="50px">Name</th>
                <td>{{ $item->name }}</td>
            </tr>
            <tr>
                <th width="50px">Mail</th>
                <td>{{ $item->mail }}</td>
            </tr>
            <tr>
                <th width="50px">Age</th>
                <td>{{ $item->age }}</td>
            </tr>
        </table>
    @endforeach
@endif
    <a href="{{ route('/hello') }}">戻る</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
