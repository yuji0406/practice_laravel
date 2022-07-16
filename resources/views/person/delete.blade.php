@extends('layouts.helloapp')

@section('title', 'Person.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/person/delete" method="post">
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
    <a href="{{ route('person') }}">戻る</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
