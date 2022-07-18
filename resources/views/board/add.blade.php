@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    <form action="/board/add" method="post">
        <table>
            @csrf
            <tr>
                <th>person id:</th>
                <td><input type="number" name="person_id"></td>
            </tr>
            <tr>
                <th>title: </th>
                <td><input type="text" name="title" value="{{ old('title') }}"></td>
            </tr>
            <tr>
                <th>massage: </th>
                <td><input type="text" name="message" value="{{ old('message') }}"></td>
            </tr>
        </table>
        <button type="submit">送信</button>
    </form>
    <a href="{{ route('board') }}">戻る</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
