@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/hello/del" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $form->id }}">
        <table>
            <tr>
                <th>Name</th>
                <td>{{ $form->name }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ $form->mail }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ $form->age }}</td>
            </tr>
        </table>
        <button type="submit">削除</button>
    </form>
    <a href="{{ route('hello/add') }}">Addページ</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
